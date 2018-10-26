<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function start(){
        return view('start');
    }

    public function services(){
        return view('services');
    }

    public function guide(){
        return view('guide');
    }

    public function galery(){
        return view('galery');
    }

    public function about(){
        return view('about');
    }

    public function requirements(){
        return view('requirements');
    }

    /*FOR CHAT VIEWS*/
    public function homeUser(){
        return view('user.usrh');
    }

    public function private()
    {
        return view('user.chat');
    }

    public function users()
    {
        return User::all();
    }
}
