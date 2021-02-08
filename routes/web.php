<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryController;

use App\Http\Controllers\WebController;



use App\Http\Controllers\HomeController;
/*
use App\Http\Controllers\imgcontroller;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!  
|  

*/
Route::get('login',[HomeController::class,'login']);


Route::post('home',[HomeController::class,'loginAccess']);
Route::get('home',[HomeController::class,'home']);



Route::get('updateaccount/{id}',[HomeController::class,'updateaccount']);
Route::post('/updateaccount/{id}',[HomeController::class,'updatedata']);


Route::get('/edititem/{author_id}',[HomeController::class,'selectItemData']);
Route::post('/edititem/{author_id}',[HomeController::class,'updateItemData']);


Route::get('booklist',[HomeController::class,'booklist']);

Route::get('/delete/{id}',[HomeController::class,'deleteData']);

Route::get('/addbook',[HomeController::class,'addbook']);
Route::post('/addbook',[HomeController::class,'insertData']);






/*

Route::get('/index',[WebController::class,'index']);
Route::get('/generic',[WebController::class,'generic']);
Route::get('/elements',[WebController::class,'elements']);

Route::get('/loginpage',[LibraryController::class,'loginpage']);
Route::get('/books',[LibraryController::class,'books']);
Route::get('/updateacc',[LibraryController::class,'updateacc']);

Route::get('/regform',[HomeController::class,'regform']);
Route::post('/outputform',[HomeController::class,'displayData']);
*/
