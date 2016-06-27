<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User1 ;
use App\Http\Requests;

class PageController extends Controller
{
    public function home()
    {
    	$user1s= User1::all();
    	return view('home1',compact('user1s'));
    }



    public function thankyou()
    {
    	return view('thankyou'); 
    }
}
