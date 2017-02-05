<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});
//направление на стартовую странчику
Route::get('/', 'IndexController@ind1');

//направление на открытие конретного материала
Route::get('article/{id}','IndexController@show')->name('articleShow');
//создание нового материала
Route::get('page/add','IndexController@add');
Route::post('page/add', 'IndexController@store')->name('articleStore');
//удаление материала
Route::delete ('page/delete/{article}', function (\App\Article $article){

   // работает везде $article_tmp = \App\Article::where('id',$article)->first();
   $article->delete();
    return redirect('/');
})->name ('articleDelete');