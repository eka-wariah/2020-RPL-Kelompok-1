<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\User;
class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\User::join('roles','users.role_id','=','roles.role_id')
        ->where('roles.role_name','=','teacher')
        ->get();
       
// dd($teacher);
        return view('teachers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create_teacher');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    $input = new User();
    $input ->name = $request->name;
    $input ->email = $request->email;
    $input ->password = BCRYPT($request->password);
    $input ->role_id=2;
    $input->save();
    return redirect('/teachers/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $teacher = \App\Role::join('users','users.role_id','=','roles.role_id')
        ->where('roles.role_name','=','teacher')
        ->where('users.id','=',$id)
        ->first();
       
// dd($teacher);
        return view('teachers.detail_teacher',['teacher'=>$teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
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
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = User::where('id','=',$id);
        $teacher->delete();
        return redirect('/teachers');
    }
}
