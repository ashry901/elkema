<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    protected $fillable = ['title', 'short_dis', 'long_dis'];

    public $timestamps = false;
}
