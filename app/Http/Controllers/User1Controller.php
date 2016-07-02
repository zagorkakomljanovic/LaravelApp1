<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User1 ;

class User1Controller extends Controller
{
    public function store(Request $request)
    {		
    		$this->validate($request , [
    			'name' =>'required' ,
    			'email' =>'required' ,
    			'phone_number' =>'required' ,	
    			]);
		
       		$user= new User1;
	    	$user->name = $request->name;
	    	$user->email =  $request->email;
            $user->phone_number =  $request->phone_number;

	    	$user->save();

	    return redirect('/thankyou');

    }
}

