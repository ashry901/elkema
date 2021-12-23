<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;


class Brand extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $fillable = ['is_active', 'photo'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public $translatedAttributes = ['name'];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function getActive()
    {
        return $this -> is_active == 0 ? 'Disable' : 'Enabled';
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('ashry/images/brands/' . $val) : "";
    }
}
