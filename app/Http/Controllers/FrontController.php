<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\users;

class FrontController extends Controller
{
    public function index(){
       
        return view('Front.index');
 
     }
	 
	 public function aboutUs(){
       
        return view('Front.about');
 
     }
	 
	 public function ourProducts(){
       
        return view('Front.products');
 
     }
	 
	 public function contactUs(){
       
        return view('Front.contact');
 
     }
	 
	 public function userRegister(){
       
        return view('Front.register');
 
     }

     public function userLogin(){
       
      return view('Front.login');

   }

   
           //this function is to insert customer registration
          public function insertCustomerRegister(Request $request){
            //return $request->input();
            $request->validate([
                'name'=>'required',
               // 'favoritecolor'=>'required',
                'email'=>'required|email|unique:customer',
                'password'=>'required',
                'phone'=>'required'
    
            ]);
            $query= DB::table('users')->insert([
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
               // 'favoritecolor'=>$request->input('favoritecolor'),
                'email'=>$request->input('email'),
                'status'=>'activated',
                'usertype'=>'customer',
                "created_at" =>date('Y-m-d H:i:s'),
                'password'=>Hash::make($request->input('password'))
            ]);
    
            $customer = new customer();
            $customer->name=$request->input('name');
            $customer->phone=$request->input('phone');
            $customer->email=$request->input('email');
            
            $customer->password=$request->input('password');
            //$customer->save();
            
            
            return redirect('login')->with('successlog','You Have Successfully Registered Your Account. You Can Now Login');
            }

            
            
    public function postCustomerLogin(Request $request){
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
      Session::flash('message-login', 'You have successfully logged in'); 
      Session::flash('alert-class', 'alert-danger'); 
       // Session::flash('message', 'You have successfully logged in');
return redirect('Home');
    }
    else{
return back()->with('fail', 'Wrong Login Details');
    }
    }

    public function CustomerLogout(){
      Auth::logout(); 
      Session::flash('message-logout', 'You are now Logged Out'); 
      Session::flash('alert-class', 'alert-danger'); 
      return redirect('Home');
    }
}
