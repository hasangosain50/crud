<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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
    // return view('welcome');
    return redirect("about");
});

// Route::get('/about', function(){
//     return view('about');
// });

// Route::view("/about",'about');
// Route::view("/contact",'contact');
// Route::get('/users/{user}',[Users::class,'index']);

Route::resource('/students','App\Http\Controllers\StudentController');
Route::resource('/contact','App\Http\Controllers\ContactController' );


Route::GET('product-get',[ProductController::class,'index'])->name('product.get');
Route::GET('product-create',[ProductController::class,'create'])->name('product.create');
Route::POST('product-store',[ProductController::class,'store'])->name('product.store');

Route::GET('product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');

Route::POST('product-update/{id}',[ProductController::class,'update'])->name('product.update');