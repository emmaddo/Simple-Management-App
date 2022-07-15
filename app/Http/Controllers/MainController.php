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

class MainController extends Controller
{
function index(){
    return view('Admin.index');
    }

    public function adminDashboard(){
        return view('Admin.dashboard');
    }

    public function viewRegAdmin(){
        $posts= DB::table('users')->get();
        return view('Admin.viewadmin', compact('posts'));
    }

    public function formRegAdmin(){
        $posts= DB::table('users')->get();
        return view('Admin.regadmin', compact('posts'));
    }

    public function viewRegCustomer(){
        $posts= DB::table('customer')->get();
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
            'email'=>'required|email|unique:customer',
            'password'=>'required',
            'phone'=>'required'

        ]);
        $query= DB::table('customer')->insert([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
           // 'favoritecolor'=>$request->input('favoritecolor'),
            'email'=>$request->input('email'),
            'status'=>'activated',
            "datetime" =>date('Y-m-d H:i:s'),
            'password'=>Hash::make($request->input('password'))
        ]);

        $customer = new customer();
        $customer->name=$request->input('name');
        $customer->phone=$request->input('phone');
        $customer->email=$request->input('email');
        
        $customer->password=$request->input('password');
        //$customer->save();
        
        
        return back()->with('success','Customer Registered Successfully');
        }


 //this function is to insert product into Products table
 public function insertProduct(Request $request){
    //return $request->input();
    $request->validate([
        'name'=>'required',
       // 'favoritecolor'=>'required',
        'price'=>'required'
        //'description'=>'required',
        

    ]);
    $query= DB::table('Product')->insert([
        'name'=>$request->input('name'),
        'price'=>$request->input('price'),
       // 'favoritecolor'=>$request->input('favoritecolor'),
        'description'=>$request->input('description'),
        'status'=>'activated',
        "datetime" =>date('Y-m-d H:i:s')
        
    ]);

    $product = new Product();
    $product->name=$request->input('name');
    $product->price=$request->input('price');
    $product->description=$request->input('description');
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
    $posts= DB::table('customer')->get();
    //var_dump($posts);
return view('Admin.RegCustomer', compact('posts'));
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

//count all customers in database
  /*  public function customerCount() {
        $customerCount = customer::count();
        
        return view('Admin.dashboard', compact('customerCount'));
  }
*/
    
  public function totalExpenses() {
    $totalExpenses = DB::table('Expenses')->sum('amount');
    return view('Admin.dashboard', compact('totalExpenses'));
}
}


