<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result2 extends Model
{
    protected $table='results2';
    protected $fillable =['id','user_id','answer_count','correct_rate','created_at','updated_at',];
}
