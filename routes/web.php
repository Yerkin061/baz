<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers;


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

// Route::get('/{lang}',[LocalizationController::class, 'index']);

// Route::get('/employee','EmployeeController@index');
// Route::get('/employee',[EmployeeController::class, 'index']);
// Route::post('/addimage','EmployeeController@store')->name('addimage');
// Route::post('/addimage',[EmployeeController::class, 'store'])->name('addimage');

// Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');
// Route::get('mail/sms',[\App\Http\Controllers\MailController::class, 'send']);

Route::get('/{lang}', function ($lang){
    App::setLocale($lang);
    return view('home');
});