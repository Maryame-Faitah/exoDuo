<?php

use Illuminate\Support\Facades\Route;
use App\Subscribe;

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
    $subscribes = Subscribe::all();
    return view('index', compact('subscribes'));
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/subscribe', 'SubscribeController');
