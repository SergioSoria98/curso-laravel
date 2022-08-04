<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GetProjectController;
use App\Http\Controllers\PostMessageController;

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

//Route::get('/', function () {
//    $nombre = "Jorge";
//
//    return view('home', compact('nombre'));
//})->name('home');



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');


Route::resource('portfolio',GetProjectController::class)
        ->names('projects')
        ->parameters(['portfolio' => 'project']);


Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', PostMessageController::class)->name('messages.store');



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
