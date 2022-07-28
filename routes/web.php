<?php

use Illuminate\Support\Facades\Route;

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
#Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio', [GetProjectController::class, 'index'])->name('projects.index');

Route::get('/portfolio/{id}', [GetProjectController::class, 'show'])->name('projects.show');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', PostMessageController::class)->name('messages.store');


