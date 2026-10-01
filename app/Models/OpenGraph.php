<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenGraph extends Model
{
    protected $fillable = [
        'og_type',
        'og_title',
        'og_url',
        'og_image',
        'og_description',
        'url',
        'lang',
    ];
}
