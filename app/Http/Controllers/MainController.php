<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\customer;
use App\Models\Product;
use App\Models\Expenses;
use App\Models\Sales;

class MainController extends Controller
{
function index(){
    return view('Admin.index');
    }

    public function adminDashboard(){
        return view('Admin.dashboard');
    }

    public function viewRegAdmin(){
        $posts= DB::table('users')->get()->where('usertype', '!=', 'customer');
        return view('Admin.viewadmin', compact('posts'));
    }

    public function formRegAdmin(){
        $posts= DB::table('users')->get()->where('usertype', '!=', 'customer');;
        return view('Admin.regadmin', compact('posts'));
    }

    public function viewRegCustomer(){
        $posts= DB::table('users')->get()->where('usertype', 'customer');
        return view('Admin.viewcustomer', compact('posts'));
    }

    public function formRegCustomer(){
        return view('Admin.regcustomer');
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


        //this function is to insert into users table
    public function insertCustomer(Request $request){
        //return $request->input();
        $request->validate([
            'name'=>'required',
           // 'favoritecolor'=>'required',
            'email'=>'required|email|unique:users',
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
//"datetime" =>date('Y-m-d H:i:s'),
            'password'=>Hash::make($request->input('password'))
        ]);

        $customer = new Users();
        $customer->name=$request->input('name');
        $customer->phone=$request->input('phone');
        $customer->email=$request->input('email');
        
        $customer->password=$request->input('password');
        $customer->save();
        
        
        return back()->with('success','Customer Registered Successfully');
        }


 //this function is to insert product into Products table
 public function insertProduct(Request $request){
    //return $request->input();
    $request->validate([
        'name'=>'required',
        'image_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       // 'favoritecolor'=>'required',
        'price'=>'required'
        //'description'=>'required',
        

    ]);
    /*
    $query= DB::table('Product')->insert([
        'name'=>$request->input('name'),
        'price'=>$request->input('price'),
        'image_name'=>$request->file('image_name')->getClientOriginalName(),
        //'image_path'=>$request->file('image_name'),
        'description'=>$request->input('description'),
        'status'=>'activated',
        'datetime' =>date('Y-m-d H:i:s')
        
    ]);
    */
    //$image_path = $request->file('image_name')->store('public/front/images/product');
    $filename = $request->file('image_name')->getClientOriginalName();
    $image_path = $request->file('image_name')->storeAs('public/front/images/product', $filename);
    $product = new Product();
    $product->name=$request->input('name');
    $product->price=$request->input('price');
    $product->image_name=$request->file('image_name')->getClientOriginalName();
    $product->description=$request->input('description');
    
    
   $product->save();
    return back()->with('success','Product Registered Successfully');
    }


    //this function is to insert product into Products table
 public function insertExpenses(Request $request){
    //return $request->input();
    $request->validate([
        'name'=>'required',
       // 'favoritecolor'=>'required',
        'amount'=>'required',
        'expdate'=>'required',
        'description'=>'required'
     ]);
    $query= DB::table('Expenses')->insert([
        'name'=>$request->input('name'),
        'amount'=>$request->input('amount'),
       // 'favoritecolor'=>$request->input('favoritecolor'),
        'description'=>$request->input('description'),
        'expdate'=>$request->input('expdate'),
        //'status'=>'activated',
        "datetime" =>date('Y-m-d H:i:s')
        
    ]);

    $product = new Product();
    $product->name=$request->input('name');
    $product->price=$request->input('price');
    $product->description=$request->input('description');
    return back()->with('success','Product Registered Successfully');
    }


     //this function is to fetch all Products from Product table and display
     public function viewProducts(){
        $posts= DB::table('Product')->get();
       return view('Admin.viewproducts', compact('posts'));
    }

    //this function is to fetch all Expenses from Expenses table and display
    public function viewExpenses(){
        $posts= DB::table('Expenses')->get();
       return view('Admin.viewexpenses', compact('posts'));
    }

    //this function inserts all Products into Product table 
    public function regProducts(){
        $posts= DB::table('Product')->get();
        return view('Admin.regproducts', compact('posts'));
     }

       public function regExpenses(){
        $posts= DB::table('Expenses')->get();
        return view('Admin.regexpenses', compact('posts'));
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

//this function is to fetch all registered customers from customer table and display
public function viewCustomer(){
    $posts= DB::table('users')->get()->where('usertype', 'customer');
    //var_dump($posts);
return view('Admin.RegCustomer', compact('posts'));
}



    public function editPost($id){
        $editpost= DB::table('users')->where('id', $id)->first();
            return view('Admin.editcustomer', compact('editpost'));
            }
            public function editProduct($id){
                $editproduct= DB::table('Product')->where('id', $id)->first();
                    return view('Admin.editproduct', compact('editproduct'));
                    }
            
                    
    public function updateRecords(Request $request){
        //return $request->input();
        //var_dump($request);
        $upquery= DB::table('users')->where('id', $request->id)->update([
            'id'=>$request->id,
            'name'=>$request->input('name'),
           // 'email'=>$request->input('email'),
            'phone'=>$request->input('phone')
        ]); 
        if($upquery){
            return back()->with('success','Customer Data Updated Successfully');
        }
        else{
            return back()->with('fail','Something went wrong');
        }

    }

    public function updateProduct($id, Request $request){
       //return $request->input();
    $request->validate([
        'name'=>'required',
        'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       // 'favoritecolor'=>'required',
        'price'=>'required'
        //'description'=>'required',
        

    ]);

    //$product = new Product();
    $product = Product::findOrFail($request->id);
    if(!empty($request->image_name)){
        $filename = $request->file('image_name')->getClientOriginalName();
        $image_path = $request->file('image_name')->storeAs('public/front/images/product', $filename);
        $product->image_name=$request->file('image_name')->getClientOriginalName();
    }
    $product->name=$request->input('name');
    $product->price=$request->input('price');
    $product->description=$request->input('description');
    
    
   $product->save();
    return back()->with('success','Product Updated Successfully'); 

    }


    public function deletePost($id){
    $delquery= DB::table('users')->where('id', $id)->delete();
    if($delquery){
        return back()->with('success','Customer Data Deleted Sussessfully');
    }
    else{
        return back()->with('success','Something went wrong');
    }

    }

    public function deleteProduct($id){
        $delquery= DB::table('Product')->where('id', $id)->delete();
        if($delquery){
            return back()->with('success','Product Deleted Sussessfully');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    
        }

//combining both queries into one method
public function adminDashboardSupply() {
        $customerCount = customer::count();
        $totalExpenses = DB::table('Expenses')->sum('amount');
        $totalCompletedSales = DB::table('Sales')->where('status', 'paid')->sum('amount');
        $posts= DB::table('customer')->orderBy('id', 'DESC')->get();
        //Both Line 251 and commented Line 253 are the same and will both work fine
        //$posts= customer::orderBy('id', 'DESC')->get();
        $pendingOrder = Sales::where('status', 'pending')->count();
        return view('Admin.dashboard', compact('customerCount', 'totalExpenses', 'posts', 'totalCompletedSales', 'pendingOrder'));
    }
}


