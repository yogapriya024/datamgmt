<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Mail\TestMail;
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
	
	Route::post('/login', [App\Http\Controllers\authController::class, 'login']);
	Route::view("login",'login');
	
	Route::get('register', [App\Http\Controllers\authController::class, 'addregister']);
	Route::post('register', [App\Http\Controllers\authController::class, 'storeregister'])->name("register");
	
	Route::view("logout",'login');
	
	Route::get('add', [App\Http\Controllers\authController::class, 'adduser']);
	Route::post('add', [App\Http\Controllers\authController::class, 'storeuser'])->name("add");
	
	Route::get('adminpanel',[App\Http\Controllers\authController::class, 'adminpanel'])->name("adminpanel");
	
	Route::get('user/view/{id}', [App\Http\Controllers\authController::class, 'viewuser'])->name('view');
	
	Route::get('edit/{id}', [App\Http\Controllers\authController::class, 'edituser']);
	Route::put('edit/{id}', [App\Http\Controllers\authController::class, 'updateuser'])->name('update');
	
	
	Route::get('image/{id}', [App\Http\Controllers\authController::class, 'addimage']);
	Route::post('image/{id}', [App\Http\Controllers\authController::class, 'storeimage'])->name("image");
	
	Route::get('TestMail/{id}', [App\Http\Controllers\authController::class, 'addmail']);
	Route::post('TestMail/{id}', [App\Http\Controllers\authController::class, 'storemail'])->name("TestMail");
	
	Route::delete('/del/{id}',[App\Http\Controllers\authController::class, 'deluser'])->name("del");

	Route::get('userpanel',[App\Http\Controllers\authController::class, 'userpanel'])->name("userpanel");
	
	


	//Route::get('send-mail', function () {
		   //$details = [
            //'title' => 'Mail from admin@gmail.com',
           //'body' => 'This is for testing email using smtp'
          // ];
      // \Mail::to('your_receiver_user@gmail.com')->send(new \App\Mail\TestMail($details));
       //dd("Email is Sent.");
    //});
	
	
	
	
	
	
	

