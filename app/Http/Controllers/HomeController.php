<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getPosition(Request $request)
    {
    	$keyword = $request->keyword;
    	$vitri = $request->vitri;
    	return view('index',['keyword'=>$keyword,'vitri'=>$vitri]);
    }

    public function direct($position="",$endposition="")
    {
        return view('direct',['position'=>$position,'endposition'=>$endposition]);
    }
}
