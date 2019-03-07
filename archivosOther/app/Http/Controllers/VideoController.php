<?php

namespace App\Http\Controllers;

use App\Rules\ValVideo;
use App\Video;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();

        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max: 30',
            'video' => 'required|mimes:mp4,mkv,mov'//mkv solo lo reconoce google chrome
        ]);

        $video = new Video();
        //s$name ="";
        if($request->hasFile('video')){
            $file = $request->file('video');
            $route = '/listRep/';
            $name = $route.$file->getClientOriginalName();

            $file->move(public_path().'/listRep/', $name);
        }
        $video->name = $request->input('name');
        $video->video = $name;
        $video->save();
           //return  $request;
        return redirect()->route('videos.index')->with('status', 'Video Guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //$video = Video::find($id);
        return view('videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $file_path = public_path().$video->video;
        \File::delete($file_path);

        $video->delete();
        return redirect()->route('videos.index')->with('status', 'Video Eliminado');
    }
}
