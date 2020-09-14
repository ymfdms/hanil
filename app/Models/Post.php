<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable =['id','user_id','korean','japanese','created_at','updated_at',];
}
