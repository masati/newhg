<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    protected $fillable = ['title','alias','desc','text','user_id'];
    //public $timestamps = false;
    //
}
