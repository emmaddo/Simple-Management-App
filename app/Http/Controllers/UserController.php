<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
//use Auth;


class UserController extends Controller
{
    public function checklogin(Request $request){
       // return $request->input();
    $request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);

    $user_data=([
        'email' => $request->get('email'),
        'password' => $request->get('password')
    ]);

    if(Auth::attempt($user_data)){
        Session::flash('message', 'You have successfully logged in');
return redirect('view-contacts');
    }
    else{
return back()->with('fail', 'Wrong Login Details');
    }
    }



    public function login(Request $request){
       
       return view('crud.login');

    }


    public function logout(){
      Auth::logout(); 
      return redirect('login');
    }
}


