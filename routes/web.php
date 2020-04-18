<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    // afficher modif dans page principale du site:
    $headers = Header::all();
    $abouts = About::all();
    $portfolios = Portfolio::all();
    $portfolios1 = Portfolio1::all();
    $teams = Team::all();
    $teams1 = Team1::all();

    return view('index',compact('headers','abouts','portfolios','portfolios1','teams','teams1'));

})->name('index');

// ADMIN
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

// HEADER
Route::resource('/admin/header','HeaderController');

// ABOUT
Route::resource('/admin/about','AboutController');

// PORTFOLIOS
Route::resource('/admin/portfolio','PortfolioController');

Route::resource('/admin/portfolio1','Portfolio1Controller');

// TEAM
Route::resource('/admin/team','TeamController');

Route::resource('/admin/team1','Team1Controller');
