<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/articles', function () {
    $articles=App\Models\Article::all();
    return view('list-articles',['articles'=>$articles]);

});
Route::get('/articles','App\Http\Controllers\ArticlesController@index');
Route::get('/articles/create','App\Http\Controllers\ArticlesController@create');
Route::post('/articles','App\Http\Controllers\ArticlesController@store');
Route::get('/articles/{article}','App\Http\Controllers\ArticlesController@show');
Route::get('/articles/{article}/edit','App\Http\Controllers\ArticlesController@edit');
Route::put('/articles/{article}','\App\Http\Controllers\ArticlesController@update');
Route::delete('/articles/{article}','\App\Http\Controllers\ArticlesController@destroy');
