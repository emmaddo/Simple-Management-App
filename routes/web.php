<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;
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

Route::get('crud', [LaravelCrud::class, 'index']);
Route::post('add', [LaravelCrud::class, 'add']);
Route::post('update-records', [LaravelCrud::class, 'updateRecords']);
Route::post('checklogin', [UserController::class, 'checklogin']);
Route::get('view-contacts', [LaravelCrud::class, 'viewContact']);
Route::get('edit-post/{id}', [LaravelCrud::class, 'editPost']);
Route::get('delete-post/{id}', [LaravelCrud::class, 'deletePost']);
Route::get('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
//Route::post('add', 'App\Http\Controllers\LaravelCrud@add');


