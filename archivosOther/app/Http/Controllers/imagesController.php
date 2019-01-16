<?php

namespace App\Http\Controllers;

use App\Imagen;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImageRequest;

class imagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Imagen::all();
        //return view('gallery.index');
        return view('gallery.index', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $imagen = new Imagen();

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $route = '/imagenes/';
            $name = $route.$file->getClientOriginalName();
            //$name = time().$file->getClientOriginalName();
            $imagen->imagen = $name;
            $file->move(public_path().'/imagenes/', $name);
        }


        $imagen->name = $request->input('name');
        //$imagen->imagen = $name;
        $imagen->save();

        return redirect()->route('imagen.index')->with('status', 'Imagen Guardada');
        //return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Imagen $imagen)//se esta haciendo uso de implicit biddind
    {
        //$imagen = Imagen::find($id);

        return view('gallery.show', compact('imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $imagen)
    {
        return view('gallery.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreImageRequest $request, Imagen $imagen)
    {
        $imagen->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $ruta = '/imagenes/';
            $name = $ruta.$file->getClientOriginalName();
            //$name = time().$file->getClientOriginalName();
            $imagen->imagen = $name;
            $file->move(public_path().'/imagenes/', $name);
        }
        $imagen->save();

        return redirect()->route('imagen.show',[$imagen])->with('status', 'Imagen actualizada');
        //return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * public_path().'/imagenes/', $name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagen $imagen)
    {
        $file_path = public_path().$imagen->imagen;
        \File::delete($file_path);//existe un problema, falta eliminar de la carpeta public imagenes

        $imagen->delete();
        return redirect()->route('imagen.index')->with('status', 'Imagen Eliminado');
        //return 'deleted';
    }
}
