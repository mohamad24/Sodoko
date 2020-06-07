<?php

use Illuminate\Support\Facades\Route;

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
  $data['epi'] = \App\Episodes::orderBy('airingtime','desc')
    ->limit(3)->get();

    return view('welcome',$data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/episode/random', 'EpisodesController@random');
Route::get('/episode/{id}', 'EpisodesController@show');
Route::post('/episode/show', 'EpisodesController@showepisode');
Route::post('/episode/like', 'EpisodesController@likeepisode');
Route::post('/episode/getlike', 'EpisodesController@getlike');
Route::post('/episode/unlike', 'EpisodesController@unlike');



Route::get('/series/subscribe/{id}', 'SeriesController@subscribe');
Route::get('/series/unsubscribe/{id}', 'SeriesController@unsubscribe');

Route::post('/search', 'SearchController@search')->name('search');



