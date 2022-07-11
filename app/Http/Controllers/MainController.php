<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class MainController extends Controller
{
function index(){
    return view('Admin.index');
    }

    public function adminDashboard(){
        return view('Admin.dashboard');
    }

    //this function is to insert into users table
    public function add(Request $request){
        //return $request->input();
        $request->validate([
            'name'=>'required',
           // 'favoritecolor'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        $query= DB::table('users')->insert([
            'name'=>$request->input('name'),
           // 'favoritecolor'=>$request->input('favoritecolor'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password'))
        ]);

        $users = new Users();
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        //$users->save();
        
        
        return back()->with('success','User Created Successfully');
        }

        //this function is to fetch all contacts from users table and display
        public function viewContact(){
            /*this is to select where all colors are red
            $posts= DB::table('Admin')
            Customer::select("*")
            ->where('favoritecolor', 'red')
            ->get();
            */
            
            
            
            $posts= DB::table('users')->get();
            //var_dump($posts);
        return view('Admin.view-contacts', compact('posts'));
        }

    public function editPost($id){
        $editpost= DB::table('users')->where('id', $id)->first();
            return view('Admin.edit-post', compact('editpost'));
            }

    public function updateRecords(Request $request){
        //return $request->input();
        $upquery= DB::table('users')->where('id', $request->id)->update([
            'id'=>$request->id,
            'name'=>$request->input('name'),
            'favoritecolor'=>$request->input('favoritecolor'),
            'email'=>$request->input('email')
        ]); 
        if($upquery){
            return back()->with('success','Data has been successfully updated');
        }
        else{
            return back()->with('fail','Something went wrong');
        }

    }


    public function deletePost($id){
    $delquery= DB::table('users')->where('id', $id)->delete();
    if($delquery){
        return back()->with('deleted','Data has been successfully Deleted');
    }
    else{
        return back()->with('notedeleted','Something went wrong');
    }

    }
}


