<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TypeJobsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home Controller Route -> page first
Route::get('/',[HomeController::class, 'index']);

// Users Controller
Route::get('/users', [UserController::class, 'index']);
Route::resource('users', UserController::class);

// Kliens Controller
Route::controller(KlienController::class)->group(function () {
    Route::get('/kliens', 'index');
    Route::get('/kliens/create', 'create');
    Route::post('/kliens', 'store');
    Route::get('/kliens/{id}/edit', 'edit');
    Route::put('/kliens/{id}', 'update');
    Route::delete('/kliens/{id}', 'destroy');
});

// Company Controller
Route::controller(CompanyController::class)->group(function () {
    Route::get('/company', 'index');
    Route::get('/company/create', 'create');
    Route::post('/company', 'store');
    Route::get('/company/edit/{id}', 'edit');
    Route::put('/company/{id}', 'update');
});



// TypeJobs Controller
Route::controller(TypeJobsController::class)->group(function () {
    Route::get('/typejobs', 'index');
    Route::get('/typejobs/create', 'create');
    Route::post('/typejobs', 'store');
    Route::get('/typejobs/edit/{id}', 'edit');
    Route::put('/typejobs/{id}', 'update');
    Route::delete('/typejobs/{id}', 'destroy');
});

// Jobs Controller
Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
    Route::get('/jobs/show/{id}', 'show');
    Route::get('/jobs/edit/{id}', 'edit');
    Route::put('/jobs/{id}', 'update');
    Route::delete('/jobs/{id}', 'destroy');
});

// Penawaran Controller
Route::controller(PenawaranController::class)->group(function () {
    Route::get('/penawaran', 'index');
    Route::get('/penawaran/create', 'create');
    Route::post('/penawaran', 'store');
    Route::get('/penawaran/show/{id}', 'show');
    Route::get('/penawaran/edit/{id}', 'edit');
    Route::put('/penawaran/{id}', 'update');
    Route::delete('/penawaran/{id}', 'destroy');
});

// Language Controller
Route::controller(LanguageController::class)->group(function () {
    Route::get('/languages', 'index');
    Route::get('/languages/create', 'create');
    Route::post('/languages', 'store');
    Route::get('/languages/edit/{id}', 'edit');
    Route::put('/languages/{id}', 'update');
    Route::delete('/languages/{id}', 'destroy');
});

// Projects Controller
Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index');
    Route::get('/projects/create', 'create');
    Route::post('/projects', 'store');
    Route::get('/projects/edit/{id}', 'edit');
    Route::put('/projects/{id}', 'update');
    Route::post('/projects/ups/{id}', 'update_status');
    Route::delete('/projects/{id}', 'destroy');
});

// Permintaan Controller
Route::controller(PermintaanController::class)->group(function () {
    Route::get('/permintaan', 'index');
    Route::get('/permintaan/create', 'create');
    Route::post('/permintaan', 'store');
    Route::get('/permintaan/edit/{id}', 'edit');
    Route::put('/permintaan/{id}', 'update');
    Route::delete('/permintaan/{id}', 'destroy');
});


// Tagihan Controller
Route::controller(TagihanController::class)->group(function () {
    Route::get('/tagihan', 'index');
    Route::get('/tagihan/create', 'create');
    Route::post('/tagihan', 'store');
    Route::get('/tagihan/edit/{id}', 'edit');
    Route::put('/tagihan/{id}', 'update');
    Route::delete('/tagihan/{id}', 'destroy');
});

// Pembayaran Controller
Route::controller(PembayaranController::class)->group(function () {
    Route::get('/pembayaran', 'index');
    Route::get('/pembayaran/cetak', 'cetak');
    Route::get('/pembayaran/create', 'create');
    Route::post('/pembayaran', 'store');
    Route::get('/pembayaran/edit/{id}', 'edit');
    Route::put('/pembayaran/{id}', 'update');
    Route::delete('/pembayaran/{id}', 'destroy');
});