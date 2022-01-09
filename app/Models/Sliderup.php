<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use phpDocumentor\Reflection\Types\Self_;

class Sliderup extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $translatedAttributes = ['description'];

    protected $fillable = ['is_active', 'slug'];

    protected $hidden = ['translations'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function getActive()
    {
        return $this -> is_active == 0 ? 'Disable' : 'Enabled';
    }

//    public function _brand()
//    {
//        return $this->belongsTo(self::class, 'brand_id');
//    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('images/sliderups/' . $val) : "";
    }
}
