<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarTugasController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterClientController;
use App\Http\Controllers\LoginController;
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
Route::post('/login/post', [LoginController::class, 'login'])->name('login.post');
Route::post('/registerfreelance', [RegisterClientController::class, 'store'])->name('register.post');
Route::group(['middleware' => 'cekrol:1'],function(){
    Route::get('/dashboardcl', 'App\Http\Controllers\ClientController@index');
    Route::resource('/dashboardcl/job', DashboardClientController::class);
});
Route::group(['middleware' => 'cekrol:2'],function(){
    Route::get('/dashboardfr', 'App\Http\Controllers\DashboardfrController@index');
    Route::get('/daftartugasfr', [DaftarTugasController::class, 'index']);
    Route::get('/portofolio', [PortofolioController::class, 'index']);
});
Route::get('/registercl', function () {
    return view('registercl');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/jobdsc', function () {
    return view('jobdsc');
});

Route::get('/byportofolio', function () {
    return view('byportofolio');

});