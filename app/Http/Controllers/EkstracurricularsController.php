<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\Ekstracurricular;

class EkstracurricularsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Ekstracurricular::all();
        return view('ekstracurriculars.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = \App\User::join('roles','users.role_id','=','roles.role_id')
        ->where('roles.role_name','=','teacher')
        ->get();
        return view('ekstracurriculars.create_ekstracurricular',compact('teacher'));
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
            'ekstracurriculars_name' => ['required', 'string', 'max:255'],
            ]);
        $input = new Ekstracurricular();
        $input ->ekstracurriculars_name = $request->ekstracurriculars_name;
        $input ->teacher_id = $request->teacher;
        $input ->description =  $request->description;
        $input->save();
        return redirect('/ekstracurriculars/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $ekstacurricular=Ekstracurricular::whereEkstracurriculars_id($id)->first();
        $nama=$ekstacurricular->ekstracurriculars_name;
        $teacher_id=$ekstacurricular->teacher_id;
        $teacher = \App\ekstracurricular::join('users','users.id','=','ekstracurriculars.teacher_id')
        ->where('ekstracurriculars.teacher_id','=',$teacher_id)
        ->where('ekstracurriculars.ekstracurriculars_name','=',$nama)
        ->first();
        $member=\App\Member::join('users','users.id','=','members.user_id')
        ->where('ekstrcurriculars_id','=',$id)->get();
        // dd($teacher);
         return view('ekstracurriculars.detail_ekstracurricular',['name'=> $ekstacurricular,'teacher'=>$teacher,'member'=>$member]);
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
        $ekstracurricular = Ekstracurricular::where('ekstracurriculars_id','=',$id);
        $ekstracurricular->delete();
        return redirect('/ekstracurriculars');
    }
}
