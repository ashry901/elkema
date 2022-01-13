<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $translatedAttributes = ['title', 'short_dis', 'long_dis'];

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

}
