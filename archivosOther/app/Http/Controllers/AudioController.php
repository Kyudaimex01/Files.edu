<?php

namespace App\Http\Controllers;

use App\Rules\ValAudio;
use App\Audio;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audios = Audio::all();
        //return 'si encontraste esto, el problema esta en la base de datos';
            return view('sound.index', compact('audios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sound.create');
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
            'name' => 'required|max: 15',
            'audio' => 'required'
            //'audio' => 'mimetypes:audio/mp3,audio/ogg,audio/mp4'
            //'audio' => 'required|mimes:mp3,ogg,wav,'
            //'audio' => ['required', new ValAudio]
        ]);

        $audio = new Audio();
        if($request->hasFile('audio')){
            $file = $request->file('audio');
            $route = '/listAudios/';
            $name = $route.$file->getClientOriginalName();

            $file->move(public_path().'/listAudios/', $name);
        }
        $audio->name = $request->input('name');
        $audio->audio = $name;
        $audio->save();

        //return 'saved';
        //return $request;
        return redirect()->route('audios.index')->with('status', 'Audio Guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     *$imagen->imagen
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audio $audio)//$id
    {
        //$file_path = public_path().'/listAudios/'.$audio->audio;//aqui su error era que estaba de mas la ruta
        $file_path = public_path().$audio->audio;
        \File::delete($file_path);

        $audio->delete();
        return redirect()->route('audios.index')->with('status', 'Audio Eliminado');
        //return 'eliminado';
    }
}
