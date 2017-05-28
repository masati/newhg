<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Все статьи',
            'description' => 'Все существующие статьи без фильтрации',
            'list' => Article::all(),
            'link' => '#',
            'linkTitle' => 'Ссылка на что-то пока не существующее',
            'routeShow' => 'articleShow',
            'routeDel' => 'articleDelete',
            ];
        return view('list', $data);
    }

    public function show($id) {

        $article = Article::with('authors')->find($id);

        return view('articles.content', ['article' => $article, 'authors' => $article->authors]);

    }
}
