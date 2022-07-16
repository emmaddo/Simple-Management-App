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
Route::get('Admin', [MainController::class, 'index']);
Route::post('add', [MainController::class, 'add']);
Route::post('postregcustomer', [MainController::class, 'insertCustomer']);
Route::post('postregproduct', [MainController::class, 'insertProduct']);
Route::post('postexpenses', [MainController::class, 'insertExpenses']);
Route::get('RegAdmin', [MainController::class, 'formRegAdmin']);
Route::get('RegCustomer', [MainController::class, 'formRegCustomer']);
Route::get('RegCustomer', [MainController::class, 'viewCustomer']);
Route::get('ViewRegAdmin', [MainController::class, 'viewRegAdmin']);
Route::get('ViewRegCustomer', [MainController::class, 'viewRegCustomer']);
Route::get('RegProducts', [MainController::class, 'regProducts']);
Route::get('RegExpenses', [MainController::class, 'regExpenses']);
Route::get('ViewExpenses', [MainController::class, 'viewExpenses']);
Route::get('ViewProducts', [MainController::class, 'viewProducts']);
Route::post('update-records', [MainController::class, 'updateRecords']);
Route::post('checklogin', [UserController::class, 'checklogin']);
Route::get('view-contacts', [MainController::class, 'viewContact']);
Route::get('edit-post/{id}', [MainController::class, 'editPost']);
Route::get('delete-post/{id}', [MainController::class, 'deletePost']);
Route::get('Dashboard', [MainController::class, 'adminDashboard']);
Route::get('Dashboard', [MainController::class, 'adminDashboardSupply']);
Route::get('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
//Route::post('add', 'App\Http\Controllers\MainController@add');



