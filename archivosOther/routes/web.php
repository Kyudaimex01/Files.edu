<?php
use App\Notice;
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

Route::get('/','NoticeController@get_index' )->name('index');

Route::get('/header', function (){
    return view('layouts.partials.header');
});

Route::get('/search','HeaderController@buscar')->name('search');

//services section
Route::get('services', function (){
    return view('services');
});
Route::get('legalization', function (){
    return view('legalization');
});
Route::get('certificate', function (){
    return view('certificate');
});
Route::get('other', function (){
    return view('other');
});
//ruta de galeria de imagenes
Route::resource('imagen', 'imagesController');
//ruta de audio
Route::resource('audios', 'AudioController');
//ruta de video
Route::resource('videos', 'VideoController');

///////////////////NEW ADDED FOR CHAT//////////
Route::get('/husr', 'HomeController@homeUser')->name('husr');

Route::get('/private ', 'HomeController@private')->name('private');
Route::get('/users', 'HomeController@users')->name('users');

Route::get('messages', 'MessageController@fetchMessages');
Route::post('messages', 'MessageController@sendMessage');
Route::get('/private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
Route::post('/private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');
////////////////////

Route::resource('notices','NoticeController');
Route::resource('users','UserController');
Route::resource('media','MediaController');
