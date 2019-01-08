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
Route::get('/app', function(){
    return view('layouts.app');
});

Route::get('login','NoticeController@get_index' )->name('login');

Route::get('/home', 'NoticeController@get_home')->name('home');

Route::get('/search','HeaderController@buscar')->name('search');

//services section
Route::get('services', function (){
    return view('services');
});
Route::get('legalization', 'CertificationController@get_legalizations');
Route::get('certification', 'CertificationController@get_certifications');
Route::get('apostille', 'CertificationController@get_apostille');
Route::get('other', function (){
    return view('other');
});
<<<<<<< HEAD
Route::get('guide', function (){
    return view('procedure_guide');
});
Route::get('history', function (){
    return view('history');
});
Route::get('fullcalendar', 'EventController@index');
=======
//ruta de galeria de imagenes
Route::resource('imagen', 'imagesController');
//ruta de audio
Route::resource('audios', 'AudioController');
//ruta de video
Route::resource('videos', 'VideoController');

>>>>>>> 1a0ff4c9
///////////////////NEW ADDED FOR CHAT//////////
Route::get('/husr', 'HomeController@homeUser')->name('husr');

Route::get('/private ', 'HomeController@private')->name('private');
Route::get('/users', 'HomeController@users')->name('users');

Route::get('messages', 'MessageController@fetchMessages');
Route::post('messages', 'MessageController@sendMessage');
Route::get('/private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
Route::post('/private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');
////////////////////
///calendar demo
Route::get('/calend', function(){
    return view('layouts.partials.calendar');
});

Route::group(['middleware' => 'auth'], function () {

Route::resource('notices','NoticeController');
Route::resource('users','UserController');
Route::resource('media','MediaController');
Route::resource('roles','RoleController');

Route::resource('certifications','CertificationController');
Route::resource('procedures','ProcedureController');

});
