<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
