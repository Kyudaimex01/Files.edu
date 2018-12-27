<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function Psy\debug;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{
    public $restful=true;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //    $users = User::orderBy('id')->get();
        //    return view('users.index', ['users' => $users]);
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'password' => 'required',
            'phone' => 'required',

        ]);

        $size = User::all()->count();

        $user = new User;
        $user->id = $size + 1;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $notice->save();

	    Session::flash('message','Se guardo&oacute; '. $user['name'] . ' correctamente');
	    return redirect('/users');
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
    	$user = DB::table('users')->where('id', $id)->first();

        $roles = Role::get();

        return view('users/edit', ['user' => $user, 'roles' => $roles]);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'password' => 'required',
            'phone' => 'required',

        ]);

        if($request->hasFile('profile_image')){
            $file = $request->file('profile_image');
            //get file with extension
            $fileNameWithExt = $file->getClientOriginalName();

            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get just file extension
            $fileExt = $request->file('profile_image')->getClientOriginalExtension();

            //get file name to store
            $fileNameToStore = $fileName.'_'.time().'.'. $fileExt;

            //upload file
            $path = $request->file('profile_image')->storeAs('public/profileImages', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $user = User::find($id);
        $data = $request->all();
        $user->update($data);

        //update news
        $new = DB::table('notices')->where('id_new', $id);
        $aux = $new->first();
        if($request->hasFile('profile_image')){
            Storage::delete('public/news/'. $aux->img_route);
            $notice = $new->update(['title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'posted_by'=>$request->input('posted_by'),
                'img_route'=> $fileNameToStore]);
        }else{
            $notice = $new->update(['title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'posted_by'=>$request->input('posted_by')]);
        }

        $user->roles()->sync($request->get('roles'));

        $aux = DB::table('notices')->where('id_new', $id)->first();
	    Session::flash('message', 'Se actualiz&oacute; ' . $aux->title .' correctamente');
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
	    $user = User::find($id);
	    $user->destroy($id);

        $i = $id;
        $size = User::all()->count();
        $i++;
        while($id <= $size){
            DB::update('update users set id = ? where id = ?',[$id,$i]);
            $i++;
            $id++;
        }

	    Session::flash('message', $user['name'] . ' deleted successfully');
	    return redirect('/users');
    }
}
