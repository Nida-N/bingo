<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pageController extends Controller
{
    public function f1()
    {
    	$pagetype="f1";

    	return view('pages.f1')->with(['pagetype'=>$pagetype]);
    }

    public function f2()
    {
    	$pagetype="f2";

    	return view('pages.f2')->with(['pagetype'=>$pagetype]);
    }

    public function f3()
    {
    	$pagetype="f3";

    	return view('pages.f3')->with(['pagetype'=>$pagetype]);
    }

    public function f4()
    {
    	$pagetype="f4";

    	return view('pages.f4')->with(['pagetype'=>$pagetype]);
    }

    public function f5()
    {
    	$pagetype="f5";

    	return view('pages.f5')->with(['pagetype'=>$pagetype]);
    }

    public function f6()
    {
    	$pagetype="f6";

    	return view('pages.f6')->with(['pagetype'=>$pagetype]);
    }

    public function f7()
    {
    	$pagetype="f7";

    	return view('pages.f7')->with(['pagetype'=>$pagetype]);
    }

    public function f8()
    {
    	$pagetype="f8";

    	return view('pages.f8')->with(['pagetype'=>$pagetype]);
    }

    public function f9()
    {
    	$pagetype="f9";

    	return view('pages.f9')->with(['pagetype'=>$pagetype]);
    }

    public function f10()
    {
    	$pagetype="f10";

    	return view('pages.f10')->with(['pagetype'=>$pagetype]);
    }

    public function f11()
    {
    	$pagetype="f11";

    	return view('pages.f11')->with(['pagetype'=>$pagetype]);
    }

    public function f12()
    {
    	$pagetype="f12";

    	return view('pages.f12')->with(['pagetype'=>$pagetype]);
    }
}
