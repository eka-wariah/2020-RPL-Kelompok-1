<?php

namespace App\Http\Controllers;

use App\cr;
use App\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\User::join('roles','users.role_id','=','roles.role_id')
        ->where('roles.role_name','=','student')
        ->get();
        return view('students.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $student = \App\User::whereId(auth()->user()->id)->first();
        return view('students.edit_student',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
         $student = \App\Role::join('users','users.role_id','=','roles.role_id')
        ->where('roles.role_name','=','student')
        ->where('users.id','=',$id)
        ->first();

       
// dd($student);
        return view('students.detail_student',['student'=>$student,'view'=>$id]);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
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
    public function update(Request $request,$id)
    {
        $user = User::whereId($id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->update();
        return redirect('/students/'.$id.'/detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::where('id','=',$id);
        $student->delete();
        return redirect('/students');
    }
}
