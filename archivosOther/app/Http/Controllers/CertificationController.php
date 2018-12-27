<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function Psy\debug;
use DB;

class CertificationController extends Controller
{
    public $restful=true;

    public function get_apostille(){
        $procedures = DB::table('procedures')->where('type_pro', 'apostilla')->get();
        return view('apostille')
            ->with('title','Apostilla')
            ->with('procedures', $procedures);
    }

    public function get_certifications(){
        $certifications = DB::table('procedures')->where('type_pro', 'certificacion')->get();
        return view('certificate')
            ->with('title','Certificaciones')
            ->with('certifications', $certifications);
    }

    public function get_legalizations(){
        $legalizations = DB::table('procedures')->where('type_pro', 'legalizacion')->get();
        return view('legalization')
            ->with('title','Legalizaciones')
            ->with('legalizations', $legalizations);
    }

    public function get_apostilla(){
        $procedures = DB::table('procedures')->where('type_pro', 'apostilla')->get();
        return view('apostilla')
            ->with('title','Apostilla')
            ->with('procedures', $procedures);
    }

    public function get_home(){
        return view('home1')
            ->with('title','Home')
            ->with('procedures', Procedure::orderBy('updated_at')->get())
            ->with('size', Procedure::all()->count());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = Procedure::orderBy('id_pro')->get();

        return view('certificate.index', ['procedures' => $procedures ]);
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
            'url' => '/certifications',
            'class'  => 'form-horizontal',
            'name'   => 'newCertificate',
            'files'  => true
        );
        return view('certificate.create',['form_options'=> $form_options]);
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
            'name_procedure' => 'required',
            'requirements_procedure' => 'required',
            //'internal_time' => 'required',
            //'external_time' => 'required',
            //'advice' => 'required',
            'posted_by' => 'required',
            'type_pro' => 'required',
            //'img_route' => 'required',
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
            $path = $request->file('img_route')->storeAs('public/certifications', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $size = Procedure::all()->count();
        //create new
        $procedure = new Procedure;
        $procedure->id_pro = $size + 1;
        $procedure->name_procedure = $request->input('name_procedure');
        $procedure->requirements_procedure = $request->input('requirements_procedure');
        $procedure->img_procedure = $fileNameToStore;
        $procedure->internal_time = $request->input('internal_time');
        $procedure->external_time = $request->input('external_time');
        $procedure->advice = $request->input('advice');
        $procedure->posted_by = $request->input('posted_by');
        $procedure->type_pro = $request->input('type_pro');
        $procedure->save();

	    Session::flash('message','Se guardo&oacute; '. $procedure['name_procedure'] . ' correctamente');
	    return redirect('/certifications');
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
        $procedure = DB::table('procedures')->where('id_pro', $id)->first();

        $form_options = array (
            'id' => 'dataForm',
            'url' => '/certifications/'. $id,
            'method' => 'PATCH',
            'class'  => 'form-horizontal',
            'name'   => 'newCertificate',
            'files'  => true,
        );
        return view('certificate.edit')
        ->with('form_options',$form_options)
        ->with('procedure', $procedure);
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
            'name_procedure' => 'required',
            'requirements_procedure' => 'required',
            //'internal_time' => 'required',
            //'external_time' => 'required',
            //'advice' => 'required',
            'posted_by' => 'required',
            'type_pro' => 'required',
            //'img_route' => 'required',
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
            $path = $request->file('img_route')->storeAs('public/certifications', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //update news
        $new = DB::table('procedures')->where('id_pro', $id);
        $aux = $new->first();
        if($request->hasFile('img_route')){
            Storage::delete('public/certifications/'. $aux->img_procedure);
            $procedure = $new->update([
                'name_procedure'=>$request->input('name_procedure'),
                'requirements_procedure'=>$request->input('requirements_procedure'),
                'img_procedure'=> $fileNameToStore,
                'internal_time'=> $request->input('internal_time'),
                'external_time'=> $request->input('external_time'),
                'advice'=> $request->input('advice'),
                'type_pro'=> $request->input('type_pro'),
                'posted_by'=>$request->input('posted_by')]);
        }else{
            $procedure = $new->update([
                'name_procedure'=>$request->input('name_procedure'),
                'requirements_procedure'=>$request->input('requirements_procedure'),
                'internal_time'=> $request->input('internal_time'),
                'external_time'=> $request->input('external_time'),
                'advice'=> $request->input('advice'),
                'type_pro'=> $request->input('type_pro'),
                'posted_by'=>$request->input('posted_by')]);
        }
        $aux = DB::table('procedures')->where('id_pro', $id)->first();
	    Session::flash('message', 'Se actualiz&oacute; ' . $aux->name_procedure .' correctamente');
        return redirect('/certifications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $new = DB::table('procedures')->where('id_pro',$id)->first();
        $procedure = DB::delete('delete from procedures where id_pro = ?',[$id]);

        $i = $id;
        $size = Procedure::all()->count();
        $i++;
        while($id <= $size){
            DB::update('update procedures set id_pro = ? where id_pro = ?',[$id,$i]);
            $i++;
            $id++;
        }

        if($new->img_procedure != 'noimage.jpg'){
            //delete file
            Storage::delete('public/certifications/'. $new->img_pro);
        }

	    Session::flash('message', 'Se elimin&oacute; '. $new->name_procedure .' correctamente');
	    return redirect('/certifications');
    }
}
