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

use App\Post;

Route::get('/', function () {
    return redirect('/blog');
});

Route::any('/blog', [
    'as' => 'frontend.posts.index', 'uses' => 'BlogController@index'
]);
Route::get('/blog/{slug}', [
    'as' => 'frontend.posts.show', 'uses' => 'BlogController@show'
]);
//Route::resource('news', 'PostsController');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/news', 'Admin\\NewsController');
    Route::resource('/posts', 'Admin\\PostsController');
    Route::resource('/categories', 'Admin\\CategoriesController');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
