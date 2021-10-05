<?php

use App\Http\Controllers\AdministrativeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\WebController;
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
    return redirect('homepage');
});
// global
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login/auth', [WebController::class, 'login_auth'])->name('loginbeh');
Route::get('/homepage', [WebController::class, 'index']);
Route::post('/register_auth', [WebController::class, 'register_auth']);
Route::post('/donation_donate/{id}', [WebController::class, 'donateNow']);
Route::get('/donation_act', [HomeController::class, 'getDataDonor']);

//logout
Route::post('/log_out_admin', [UserController::class, 'log_out_admin']);
//endglobal
Auth::routes();

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    Route::get('/hospital_list', [HospitalController::class, 'index']);
    Route::resource('hospital', HospitalsController::class);
    Route::get('/regency/{id}', [AdministrativeController::class, 'regency']);
    Route::get('/district/{id}', [AdministrativeController::class, 'district']);
    Route::get('/village/{id}', [AdministrativeController::class, 'village']);
});


Route::resource('donor', PendonorController::class);
// Route For add Hospital
