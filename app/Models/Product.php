<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Translatable,
        SoftDeletes;

    protected $with = ['translations'];

    protected $translatedAttributes = ['name', 'description', 'short_description'];

    protected $fillable = [
        'brand_id',
        'slug',
        'sku',
        'price',
        'special_price',
        'special_price_type',
        'special_price_start',
        'special_price_end',
        'selling_price',
        'manage_stock',
        'qty',
        'in_stock',
        'is_active'
    ];

    protected $hidden = ['translations'];

    protected $casts = [
        'manage_stock'  => 'boolean',
        'in_stock'      => 'boolean',
        'is_active'     => 'boolean',
    ];

    protected $dates = [
        'special_price_start',
        'special_price_end',
        'start_date',
        'end_date',
        'deleted_at',
    ];

    /*
    protected $appends = [
            'base_image', 'formatted_price', 'rating_percent', 'is_in_stock', 'is_out_of_stock',
            'is_new', 'has_percentage_special_price', 'special_price_percent',
        ];
    */

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withDefault();
    }

    public function getActive()
    {
        return $this -> is_active == 0 ? 'Enabled' : 'Disable';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'product_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function hasStock($quantity)
    {
        return $this->qty >= $quantity;
    }

    public function outOfStock()
    {
        return $this->qty === 0;
    }

    public function inStock()
    {
        return $this->qty >= 1;
    }

    public function getTotal($converted = true)
    {
        return $total =  $this->special_price ?? $this -> price;
    }
}
