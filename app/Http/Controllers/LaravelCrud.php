<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
function index(){
    return view('crud.index');
    }

    //this function is to insert into crud table
    public function add(Request $request){
        //return $request->input();
        $request->validate([
            'name'=>'required',
            'favoritecolor'=>'required',
            'email'=>'required|email|unique:crud'
        ]);
        $query= DB::table('crud')->insert([
            'name'=>$request->input('name'),
            'favoritecolor'=>$request->input('favoritecolor'),
            'email'=>$request->input('email')
        ]);

        if($query){
            return back()->with('success','Data has been successfully inserted into database');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
        }

        //this function is to fetch all contacts from crud table and display
        public function viewContact(){
            /*this is to select where all colors are red
            $posts= DB::table('crud')
            Customer::select("*")
            ->where('favoritecolor', 'red')
            ->get();
            */
            
            
            
            $posts= DB::table('crud')->get();
            //var_dump($posts);
        return view('crud.view-contacts', compact('posts'));
        }

    public function editPost($id){
        $editpost= DB::table('crud')->where('id', $id)->first();
            return view('crud.edit-post', compact('editpost'));
            }

    public function updateRecords(Request $request){
        //return $request->input();
        $upquery= DB::table('crud')->where('id', $request->id)->update([
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
    $delquery= DB::table('crud')->where('id', $id)->delete();
    if($delquery){
        return back()->with('deleted','Data has been successfully Deleted');
    }
    else{
        return back()->with('notedeleted','Something went wrong');
    }

    }
}


