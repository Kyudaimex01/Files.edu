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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/header', function (){
    return view('layouts.partials.header');
});

Route::get('/search','HeaderController@buscar')->name('search');

Route::get('/index','NoticeController@get_index' )->name('index');
//function (){
//$notices = Notice::listall();
//return view('index')->with('notices',$notices);

//});

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