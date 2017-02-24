<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicelist extends Model
{
    protected $fillable = ['Name','Description'];
    //
    public $timestamps = false;
}
