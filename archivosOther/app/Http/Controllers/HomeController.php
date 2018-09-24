<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home')->with('');
    }

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

}
