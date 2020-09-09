<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MyekskulController extends Controller
{
    public function index()
    {
    	$myekskul = Member::join('ekstracurriculars','members.ekstrcurriculars_id','=','ekstracurriculars.ekstracurriculars_id')
    	->where('members.user_id','=',auth()->user()->id)->get();
    	return view('myekskul.index',compact('myekskul'));
    }
}
