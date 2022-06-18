<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardListingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Application;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/jobs', [ListingController::class, 'index']);
Route::get('/jobs/{listing}', [ListingController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profile', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/register/seeker', [RegisterController::class, 'seeker'])->middleware('guest');
Route::post('/register/seeker', [RegisterController::class, 'storeSeeker']);

Route::get('/register/company', [RegisterController::class, 'recruiter'])->middleware('guest');
Route::post('/register/company', [RegisterController::class, 'storeRecruiter']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('recruiter');

Route::resource('/dashboard/lists', DashboardListingController::class)->middleware('recruiter');

Route::get('/dashboard/applications', [ApplicationController::class, 'index'])->middleware('recruiter');
Route::get('/dashboard/applications/{application}', [ApplicationController::class, 'show'])->middleware('recruiter');
Route::post('/jobs/apply/{applications}', [ApplicationController::class, 'store']);
Route::delete('/dashboard/applications/{application}', [ApplicationController::class, 'destroy']);
