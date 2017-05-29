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
Auth::routes();
Route::get('/', function () {
  return view('welcome');
});

<<<<<<< HEAD
//Route::get('/', function () {
//  return view('welcome');
//});
=======
Route::get('user/{id?}', 'UserController@showProfile');
>>>>>>> 4aa5d2c84e9dad44fecc1e687300e1355c596de5
//направление на стартовую странчику
//Route::get('/', 'IndexController@ind1');
Route::get('articles', 'ArticleController@index');
Route::get('article/{id}','ArticleController@show')->name('articleShow');

Route::get('services', 'GuideServiceController@index');
Route::get('services/{id}','GuideServiceController@show')->name('serviceShow');
Route::post('services/{id}/delete', function (\App\Models\GuideService $guideService){
    $guideService->delete();
    return redirect('/');
})->name ('serviceDelete');
//направление на открытие конретного материала
//Route::get('article/{id}','IndexController@show')->name('articleShow');

//создание нового материала
Route::get('page/add','IndexController@add');
Route::post('page/add', 'IndexController@store')->name('articleStore');
//удаление материала
Route::delete ('page/delete/{article}', function (\App\Models\Article $article){

   // работает везде $article_tmp = \App\Article::where('id',$article)->first();
   $article->delete();
    return redirect('/');
})->name ('articleDelete');
// список сервисов
<<<<<<< HEAD
Route::get('services','IndexController@servicelist');
=======
//Route::get('service','IndexController@service');
>>>>>>> 4aa5d2c84e9dad44fecc1e687300e1355c596de5

Route::get('service/clan/events','IndexController@eventclan');



Route::get('/home', 'HomeController@index');
Route::get('/myOwl', function (){
    return view('vik.owl');

});
