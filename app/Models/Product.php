<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable =['name', 'picture', 'description', 'status', 'link', 'lang', 'v_nalishii', 'zakaz','created_at','updated_at'];

     public function prices(){
        return $this->hasMany(Price::class);
     }
     }
