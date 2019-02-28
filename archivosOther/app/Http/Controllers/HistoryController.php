<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function Psy\debug;
use DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = DB::table('histories')->where('id_history', $id)->first();

        $form_options = array (
            'id' => 'dataForm',
            'url' => '/history-edit/'. $id,
            'method' => 'PATCH',
            'class'  => 'form-horizontal',
            'name'   => 'newHistory',
            'files'  => true,
        );
        return view('Administration.history-edit')
        ->with('form_options',$form_options)
        ->with('history', $history);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            //'intro' => 'required',
        ]);

        if($request->hasFile('img_struct')){
            $file = $request->file('img_struct');
            //get file with extension
            $fileNameWithExt = $file->getClientOriginalName();

            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get just file extension
            $fileExt = $request->file('img_struct')->getClientOriginalExtension();

            //get file name to store
            $fileNameToStore = $fileName.'_'.time().'.'. $fileExt;

            //upload file
            $path = $request->file('img_struct')->storeAs('public/history', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

         //update news
        $hist = DB::table('histories')->where('id_history', $id);
        $aux = $hist->first();
            if($request->hasFile('img_struct')){
                if(($aux->img_struct != 'noimage.jpg')&&($aux->img_struct != null)){
                   Storage::delete('public/history/'. $aux->img_struct);
                }
                $history = $hist->update(['intro'=>$request->input('intro'),
                /**
                    '1rst_date'=>$request->input('1rst_date'),
                    '1rst_section'=>$request->input('1rst_section'),
                    '2nd_date'=>$request->input('2nd_date'),
                    '2nd_section'=>$request->input('2nd_section'),
                    '3rt_date'=>$request->input('3rt_date'),
                    '3rt_section'=>$request->input('3rt_section'),
                    '4rt_date'=>$request->input('4rt_date'),
                    '4rt_section'=>$request->input('4rt_section'),
                */
                    'stages'=> $request->input('stages'),
                    'img_route'=> $fileNameToStore,
                    'structure'=> $request->input('structure')]);
            }else{
                $history = $hist->update(['intro'=>$request->input('intro'),
                /**
                '1rst_date'=>$request->input('1rst_date'),
                '1rst_section'=>$request->input('1rst_section'),
                '2nd_date'=>$request->input('2nd_date'),
                '2nd_section'=>$request->input('2nd_section'),
                '3rt_date'=>$request->input('3rt_date'),
                '3rt_section'=>$request->input('3rt_section'),
                '4rt_date'=>$request->input('4rt_date'),
                '4rt_section'=>$request->input('4rt_section'),
                */
                'stages'=> $request->input('stages'),
                'structure'=> $request->input('structure')]);
            }
        $aux = DB::table('histories')->where('id_history', $id)->first();
        Session::flash('message', 'Se actualiz&oacute; la historia correctamente');
        return redirect('/history-edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
