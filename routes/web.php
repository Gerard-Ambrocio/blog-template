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

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/hello', function () {
    return ('hello');
});

Route::get('/articles', 'ArticlesController@showArticles');

Route::get('/articles/showAddForm', 'ArticlesController@showAddForm');

Route::get('/articles/{id}', 'ArticlesController@showArticle');

Route::post('/articles/create', 'ArticlesController@createArticle');

Route::get('/articles/{id}/delete', 'ArticlesController@deleteArticle');

Route::get('/articles/{id}/showEditForm', 'ArticlesController@showEditForm');

Route::post('/articles/{id}/edit', 'ArticlesController@editArticle');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/articles/{article_id}/createComment', 'ArticlesController@createComment');
