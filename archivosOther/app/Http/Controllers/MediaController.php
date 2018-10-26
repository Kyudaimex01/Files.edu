<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class MediaController extends Controller
{
    public $restful=true;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $files = Media::orderBy('id')->get();
        return view('media.index', ['files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $data = $request->all();
	    Media::create($data);

	    Session::flash('message', $data['name'] . ' added successfully');
	    return redirect('/media');
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
    	$file = Media::find($id);
        return view('media/edit', ['file' => $file]);
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
        $file = Media::find($id);
        $data = $request->all();
        $file->update($data);

	    Session::flash('message', $file['name'] . ' updated successfully');
        return redirect('/media');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $file = Media::find($id);
	    $file->destroy($id);

        $i = $id;
        $size = Media::all()->count();
        $i++;
        while($id <= $size){
            DB::update('update media set id = ? where id = ?',[$id,$i]);
            $i++;
            $id++;
        }

	    Session::flash('message', $file['name'] . ' deleted successfully');
	    return redirect('/media');
    }
}
