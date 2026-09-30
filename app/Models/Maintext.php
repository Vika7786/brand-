<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
    protected $fillable =['name','user_id', 'body', 'url', 'created_at', 'updated_at', 'picture', 'discription_small', 'status'];
}
