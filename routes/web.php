<?php

use Illuminate\Support\Facades\Route;
use App\Header;
use App\About;

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
    // afficher modif dans page principale du site:
    $headers = Header::all();
    $abouts = About::all();

    return view('index',compact('headers','abouts'));

})->name('index');

// ADMIN
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

// HEADER
Route::resource('/admin/header','HeaderController');

// ABOUT
Route::resource('/admin/about','AboutController');

