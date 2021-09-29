<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CampController;
use App\Http\Controllers\FishingController;

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

// indexページ
Route::get('/', [IndexController::class, 'view'])->name('index_view');


// campページ
Route::get('/camp', [CampController::class, 'view'])->name('camp_view');
Route::post('/camp/post', [CampController::class, 'post'])->name('camp_post');
Route::get('/camp/search', [CampController::class, 'search'])->name('camp_search');


// fishingページ
Route::get('/fishing', [FishingController::class, 'view'])->name('fishing_view');
Route::post('/fishing/post', [FishingController::class, 'post'])->name('fishing_post');
Route::get('/fishing/search', [FishingController::class, 'search'])->name('fishing_search');
