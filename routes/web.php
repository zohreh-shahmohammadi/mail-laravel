<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
//install guzzel pakage
Route::any('email',function(){
   //$user = Auth::user()->id();
Mail::send('emails.test',[],function($message){
 
    $message->from('mailmailsercvice@gmail.com','zohreh');
$message->to('shahmohamadizohreh@gmail.com','Zohreh')->subject('Welcome to my project');
});
//two way mail send 
});
Route::get('send-mail', '\App\Http\Controllers\MailController@index');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
