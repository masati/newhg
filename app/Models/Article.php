<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04.02.2017
 * Time: 20:32
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','alias','desc','text'];
   // public $timestamps = false;

    public function authors()
    {
        return $this->belongsToMany(User::class, 'authors', 'article_id', 'user_id');
    }

    //getters and setters
}