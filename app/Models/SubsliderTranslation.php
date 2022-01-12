<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubsliderTranslation extends Model
{
    protected $fillable = ['title', 'description'];

    public $timestamps = false;
}
