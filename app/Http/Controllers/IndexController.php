<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04.02.2017
 * Time: 14:03
 */

namespace App\Http\Controllers;
use App\Article;

class IndexController
{

    protected $message;
    protected $header;
    public function __construct(){
        $this->header = 'Будущий сайт';
        $this->message = 'Тут будет всякая хрень';
    }


    public function ind1()
    {
        $message = 'Proverka';
        $articles = Article::select(['id', 'title', 'desc'])->get();
        //dump($articles);
        return view('page')->with('articles', $articles);
    }
    public function show($id) {

        $article = Article::select(['id','title','text'])->where('id',$id)->first();

        //dump($article);

        return view('article_content')->with(['message'=>$this->message,
            'header' => $this->header,
            'article' => $article

        ]);

    }
    public function add(){
        return view('add_content');

    }
    public function store() {

    }
}