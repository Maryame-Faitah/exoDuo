<?php

use Illuminate\Support\Facades\Route;
use App\Subscribe;
use App\Service1;
use App\Service2;
use App\Testimonial1;
use App\Testimonial2;

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
    $services = Service1::all();
    $services2 = Service2::all();
    $testimonials = Testimonial1::all();
    $testimonials2 = Testimonial2::all();
    return view('index', compact('subscribes', 'services', 'services2', 'testimonials', 'testimonials2'));
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/subscribe', 'SubscribeController');

Route::get('/admin/services', function(){
    $services = Service1::all();
    $services2 = Service2::all();
    return view('admin.services.index', compact('services', 'services2'));
});

Route::get('/admin/testimonials', function(){
    $testimonials = Testimonial1::all();
    $testimonials2 = Testimonial2::all();
    return view('admin.testimonials.index', compact('testimonials', 'testimonials2'));
});

Route::resource('/admin/services1', 'ServiceController');

Route::resource('/admin/services2', 'Service2Controller');

Route::resource('/admin/testimonials1', 'Testimonial1Controller');

Route::resource('/admin/testimonials2', 'Testimonial2Controller');