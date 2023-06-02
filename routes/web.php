<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarTugasController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//homepage
Route::get('/','App\Http\Controllers\TemplateController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboardfr', 'App\Http\Controllers\DashboardfrController@index');
Route::get('/daftartugasfr', [DaftarTugasController::class, 'index']);
Route::get('/portofolio', [PortofolioController::class, 'index']);
Route::get('/dashboardcl', 'App\Http\Controllers\ClientController@index');
Route::resource('/dashboardcl/job', DashboardClientController::class);
Route::get('/registercl', function () {
    return view('registercl');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/jobdsc', function () {
    return view('jobdsc');
});