<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Slider extends Model
{
    protected $fillable = [
        //'is_active',
        'photo',
        'created_at',
        'updated_at',
        'updated_at'
    ];

    // protected $casts = [
    //     'is_active' => 'boolean',
    // ];

    // public function scopeActive($query)
    // {
    //     return $query->where('is_active', 1);
    // }

    // public function getActive()
    // {
    //     return $this -> is_active == 0 ? 'Enabled' : 'Disable';
    // }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('ashry/images/sliders/' . $val) : "";
    }
}
