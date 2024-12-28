<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LagoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TudoController;
use App\Http\Controllers\TudosCOntroller;
use App\Http\Controllers\UserProfile;
use App\Http\Controllers\UserProfileCOntroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login'])->name('login');


Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('tudo', TudoController::class);
    Route::get('category_search', [SearchController::class, 'category']);
    Route::resource('contact', ContactController::class); 
    Route::post('logout', [LogoutController::class, 'logout']);
    // 
   Route::get('profile', [ProfileController::class, 'show']);
   Route::put('profile', [ProfileController::class, 'update']);
});


Route::get('table-size', [TudosCOntroller::class, 'getTableSize']);