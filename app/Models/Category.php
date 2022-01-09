<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use phpDocumentor\Reflection\Types\Self_;

class Category extends Model
{

    use Translatable;

    protected $with = ['translations'];

    protected $translatedAttributes = ['name'];

    protected $fillable = ['parent_id', 'slug', 'is_active'];

    protected $hidden = ['translations'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeParent($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeChild($query)
    {
        return $query->whereNotNull('parent_id');
    }

    public function getActive()
    {
        return $this->is_active == 0 ? 'Disable' : 'Enabled' ;
    }

    public function _parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // Get All Childrens
    public function childrens()
    {
        return $this->hasMany(Self::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('images/categories/' . $val) : "";
    }


}
