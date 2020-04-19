<?php

use Illuminate\Support\Facades\Route;

use App\Subscribe;
use App\Service1;
use App\Service2;
use App\Testimonial1;
use App\Testimonial2;
use App\ContactAdmin;
use App\ContactUser;
use App\ContactSection;
use App\Header;
use App\About;
use App\Portfolio;
use App\Portfolio1;
use App\Team;
use App\Team1;


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

// INDEX
Route::get('/', function () {
    $subscribes = Subscribe::all();
    $services = Service1::all();
    $services2 = Service2::all();
    $testimonials = Testimonial1::all();
    $testimonials2 = Testimonial2::all();
    $contactAdmins = ContactAdmin::all();
    $contactSections = ContactSection::all();
    $headers = Header::all();
    $abouts = About::all();
    $portfolios = Portfolio::all();
    $portfolios1 = Portfolio1::all();
    $teams = Team::all();
    $teams1 = Team1::all();

    return view('index', compact('subscribes', 'services', 'services2', 'testimonials', 'testimonials2', 'contactAdmins', 'contactSections', 'headers','abouts','portfolios','portfolios1','teams','teams1'));
})->name('index');

// ADMIN
Route::get('/admin', function () {
    $services2 = Service2::all();
    $testimonials2 = Testimonial2::all();
    $contactUsers = ContactUser::all();
    $portfolios = Portfolio::all();
    $teams = Team::all();
    return view('admin.index', compact('services2', 'testimonials2', 'contactUsers', 'portfolios', 'teams'));
});

// HEADER
Route::resource('/admin/header','HeaderController');

// ABOUT
Route::resource('/admin/about','AboutController');

// SERVICES
Route::resource('/admin/services1', 'ServiceController');

Route::resource('/admin/services2', 'Service2Controller');

// SUBSCRIBE
Route::resource('/admin/subscribe', 'SubscribeController');

// PORTFOLIOS
Route::resource('/admin/portfolio','PortfolioController');

Route::resource('/admin/portfolio1','Portfolio1Controller');

// TESTIMONIALS
Route::resource('/admin/testimonials1', 'Testimonial1Controller');

Route::resource('/admin/testimonials2', 'Testimonial2Controller');

// TEAM
Route::resource('/admin/team','TeamController');

Route::resource('/admin/team1','Team1Controller');

// CONTACTS
Route::resource('/admin/contactAdmin', 'ContactAdminController');

Route::resource('/admin/contactUser', 'ContactUserController');

Route::resource('/admin/contactSection', 'ContactSectionController');