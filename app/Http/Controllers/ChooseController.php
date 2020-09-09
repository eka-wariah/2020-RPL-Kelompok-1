<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\ekstracurricular;
use App\Member;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::whereUser_id(auth()->user()->id)->count();
            if ($data>2) {
                return redirect('/dashboard');
            }else{
                $choose=Ekstracurricular::join('users','users.id','=','ekstracurriculars.teacher_id')->get();
        return view('choose.index',compact('choose'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function choose()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->except(['_token']) as$no => $key ) {
            $data=Member::whereUser_id(auth()->user()->id)->count();
            if ($data>2) {
                return redirect('/dashboard');
            }else{
                $member = new Member();
                $member->user_id = Auth()->user()->id;
                $member->ekstrcurriculars_id = $key;
                $member->save();  
            }
        }
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
//
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
    public function out($id)
    {
        $out=Member::where('ekstrcurriculars_id','=',$id)->where('user_id','=',auth()->user()->id)->first();
        $out->delete();
        return redirect('/myekskul');
    }
}
