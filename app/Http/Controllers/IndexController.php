<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04.02.2017
 * Time: 14:03
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Service;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Validation;

class IndexController extends Controller
{
//ненужно но пусть будет как образец
    protected $message;
    protected $header;
    public function __construct(){
        $this->header = 'Будущий сайт';
        $this->message = 'Тут будет всякая хрень';
    }

    //подтягивание данных базы для стартовой странички
    public function ind1()
    {
        $message = 'Proverka';
        $articles = Article::select(['id', 'title', 'desc'])->get();
        //dump($articles);
        return view('page')->with('articles', $articles);
    }
    //вызов данных по конретной записи полный просмотр
    public function show($id) {

        $article = Article::select(['id','title','text'])->where('id',$id)->first();
        if (Auth::user()->cannot('delete-post', $article)) {
            return redirect ('/')->with('message', 'oops!');
        }
        //dump($article);

        return view('article_content')->with(['message'=>$this->message,
            'header' => $this->header,
            'article' => $article

        ]);

    }
    //сохранение данных в базу
    public function add (){
        return view('add-content');

    }
    public function store(Request $request) {

       // dump($request->all());
      //$this->validate($request, ['title' => 'required|max:255', 'alias' => 'required|unique:articles,alias','text' => 'required']);

       $data = $request->all();
        dump($data);

        $article = new Article;
        $article->fill($data);
        dump($article);
       $article->save();

       return redirect('/');
    }
    public function eventclan (){
        $ivent = 'tj217';
        dump($ivent);
        return view('event-clan');

    }
// список сервисов
    public function servicelist ()
    {
        $services = Service::select(['id', 'servicename', 'description'])->get();
       //
       // dump('$services');
       //
       return view('servicesview')->with('services', $services);
    }
 }