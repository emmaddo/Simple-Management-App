<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('/Home', [FrontController::class, 'index']);
Route::get('/AboutUs', [FrontController::class, 'aboutUs']);
Route::get('/OurProducts', [FrontController::class, 'ourProducts']);
Route::get('/ContactUs', [FrontController::class, 'contactUs']);
Route::get('/Register', [FrontController::class, 'userRegister']);
Route::get('/login', [FrontController::class, 'userLogin']);
Route::post('postCustomerRegister', [FrontController::class, 'insertCustomerRegister']);
Route::post('postCustomerLogin', [FrontController::class, 'postCustomerLogin']);
Route::get('Admin', [MainController::class, 'index']);
Route::post('add', [MainController::class, 'add']);
Route::post('postregcustomer', [MainController::class, 'insertCustomer']);
Route::post('postregproduct', [MainController::class, 'insertProduct']);
Route::post('postexpenses', [MainController::class, 'insertExpenses']);
Route::get('Admin/RegAdmin', [MainController::class, 'formRegAdmin']);
Route::get('RegCustomer', [MainController::class, 'formRegCustomer']);
Route::get('Admin/RegCustomer', [MainController::class, 'viewCustomer']);
Route::get('Admin/ViewRegAdmin', [MainController::class, 'viewRegAdmin']);
Route::get('Admin/ViewRegCustomer', [MainController::class, 'viewRegCustomer']);
Route::get('Admin/RegProducts', [MainController::class, 'regProducts']);
Route::get('Admin/RegExpenses', [MainController::class, 'regExpenses']);
Route::get('Admin/ViewExpenses', [MainController::class, 'viewExpenses']);
Route::get('Admin/ViewProducts', [MainController::class, 'viewProducts']);
Route::post('Admin/update-records/{id}', [MainController::class, 'updateRecords']);
Route::post('Admin/updateproduct/{id}', [MainController::class, 'updateProduct']);
Route::post('Admin/checklogin', [UserController::class, 'checklogin']);
Route::get('view-contacts', [MainController::class, 'viewContact']);
Route::get('Admin/edit-post/{id}', [MainController::class, 'editPost']);
Route::get('Admin/edit-product/{id}', [MainController::class, 'editProduct']);
Route::get('Admin/delete-post/{id}', [MainController::class, 'deletePost']);
Route::get('Admin/delete-product/{id}', [MainController::class, 'deleteProduct']);
Route::get('Admin/Dashboard', [MainController::class, 'adminDashboard']);
Route::get('Admin/Dashboard', [MainController::class, 'adminDashboardSupply']);
Route::get('Admin/login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
Route::get('CustomerLogout', [FrontController::class, 'CustomerLogout']);
//Route::post('add', 'App\Http\Controllers\MainController@add');



