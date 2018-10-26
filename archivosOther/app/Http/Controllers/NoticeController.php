<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function Psy\debug;
use DB;

class NoticeController extends Controller
{
    public $restful=true;

    public function get_index(){
        return view('index')
            ->with('title','Index')
            ->with('notices', Notice::all()->sortBy('updated_at'))
            ->with('size', Notice::all()->count());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $notices = Notice::orderBy('id_new')->get();
        return view('news.index', ['notices' => $notices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form_options = array (
            'id' => 'dataForm',
            'url' => '/notices',
            'class'  => 'form-horizontal',
            'name'   => 'newNotice',
            'files'  => true
        );
        return view('news.create',['form_options'=> $form_options]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'posted_by' => 'required',
            'img_route' => 'required',
        ]);

        if($request->hasFile('img_route')){
            $file = $request->file('img_route');
            //get file with extension
            $fileNameWithExt = $file->getClientOriginalName();

            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get just file extension
            $fileExt = $request->file('img_route')->getClientOriginalExtension();

            //get file name to store
            $fileNameToStore = $fileName.'_'.time().'.'. $fileExt;

            //upload file
            $path = $request->file('img_route')->storeAs('public/news', $fileNameToStore);
        }else{
            $fileNameToStore = '';
        }

        $size = Notice::all()->count();

        //create new
        $notice = new Notice;
        $notice->id_new = $size + 1;
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        $notice->posted_by = $request->input('posted_by');
        $notice->img_route = $fileNameToStore;
        $notice->save();

	    Session::flash('message','Se guardo&oacute; '. $notice['title'] . ' correctamente');
	    return redirect('/notices');
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
        $new = DB::table('notices')->where('id_new', $id)->first();

        $form_options = array (
            'id' => 'dataForm',
            'url' => '/notices/'. $id,
            'method' => 'PATCH',
            'class'  => 'form-horizontal',
            'name'   => 'newNotice',
            'files'  => true,
        );
        return view('news.edit')
        ->with('form_options',$form_options)
        ->with('new', $new);
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
        //dd($request);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'posted_by' => 'required',
        ]);

        if($request->hasFile('img_route')){
            $file = $request->file('img_route');
            //get file with extension
            $fileNameWithExt = $file->getClientOriginalName();

            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get just file extension
            $fileExt = $request->file('img_route')->getClientOriginalExtension();

            //get file name to store
            $fileNameToStore = $fileName.'_'.time().'.'. $fileExt;

            //upload file
            $path = $request->file('img_route')->storeAs('public/news', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //update news
        $new = DB::table('notices')->where('id_new', $id);
        $aux = $new->first();
        if($request->hasFile('img_route')){
            Storage::delete('public/news/'. $aux->img_route);
            $notice = $new->update(['title'=>$request->input('title'),
                'description'=>$request->input('description'),'posted_by'=>$request->input('posted_by'),'img_route'=> $fileNameToStore]);
        }else{
            $notice = $new->update(['title'=>$request->input('title'),
                'description'=>$request->input('description'),'posted_by'=>$request->input('posted_by')]);
        }
        $aux = DB::table('notices')->where('id_new', $id)->first();
	    Session::flash('message', 'Se actualiz&oacute; ' . $aux->title .' correctamente');
        return redirect('/notices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = DB::table('notices')->where('id_new',$id)->first();
        $notice = DB::delete('delete from notices where id_new = ?',[$id]);

        $i = $id;
        $size = Notice::all()->count();
        $i++;
        while($id <= $size){
            DB::update('update notices set id_new = ? where id_new = ?',[$id,$i]);
            $i++;
            $id++;
        }

        if($new->img_route != 'noimage.jpg'){
            //delete file
            Storage::delete('public/news/'. $new->img_route);
        }

	    Session::flash('message', 'Se elimin&oacute; '. $new->title .' correctamente');
	    return redirect('/notices');
    }
}
