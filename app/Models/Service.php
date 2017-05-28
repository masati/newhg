<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['servicename','description'];
    //
    public $timestamps = false;
}
