<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\resController;
use App\Http\Controllers\formControl;
use App\Models\Customer;

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

// Route::get('/user', [userController::class,'show']);
// Route::get('/show/{name}',[mycontroller::class,'show_me']);

Route::view('/user','user');


Route::get('/names/{name}/{age?}',function($name,$age=null){
 $a=compact('name','age'); // basically campact() function use store multiple variable value inside single variable.
 return $a;

});

//resource controller 

Route::resource('/res',resController::class);

//blade.php 

Route::get('/Blade/{name?}',function($name=null){
    $demo="<h1>Hello !! blade php </h1>";
    $value=compact('demo','name');

    return view('Blade')->with($value);
});



// Route::get('/customer',function(){

//     $customers= Customer::all();

//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::get('/form/create',[formControl::class,'create'])->name('form');
Route::post('/form/create',[formControl::class,'store'] )->name('store');

Route::get('/form/customers',[formControl::class,'view'] )->name('customers');

Route::get('/form/delete/{id}', [formControl::class,'delete'])->name('customer_delete');

Route::get('/form/edit/{id}',[formControl::class,'edit'])->name('customer_edit');

Route::post('/form/update/{id}',[formControl::class,'update']);






