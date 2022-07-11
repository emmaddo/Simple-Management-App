<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Admin', [MainController::class, 'index']);
Route::post('add', [MainController::class, 'add']);
Route::post('update-records', [MainController::class, 'updateRecords']);
Route::post('checklogin', [UserController::class, 'checklogin']);
Route::get('view-contacts', [MainController::class, 'viewContact']);
Route::get('edit-post/{id}', [MainController::class, 'editPost']);
Route::get('delete-post/{id}', [MainController::class, 'deletePost']);
Route::get('Dashboard', [MainController::class, 'adminDashboard']);
Route::get('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
//Route::post('add', 'App\Http\Controllers\MainController@add');


