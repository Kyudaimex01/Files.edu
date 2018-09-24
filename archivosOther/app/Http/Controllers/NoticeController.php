<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    public $restful=true;

    public function get_index(){
        return view('index')
            ->with('title','Index')
            ->with('notices', Notice::all()->sortBy('created_at'))
            ->with('size', Notice::all()->count());
    }

    public function store(Request $request){

    }
}
