<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Subslider extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $translatedAttributes = ['title', 'description'];

    protected $fillable = ['title', 'description'];

    protected $hidden = ['translations'];
}
