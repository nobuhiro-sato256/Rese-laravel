<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\StoreInformationController;

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
Route::get('/', [StoreInformationController::class, 'index'])->name('index');
Route::get('/detail/{id}', [StoreInformationController::class, 'detail'])->name('detail');
Route::post('/reservation', [StoreInformationController::class, 'reservation'])->middleware('auth');
Route::post('/update', [StoreInformationController::class, 'update'])->middleware('auth');
Route::get('/search', [StoreInformationController::class, 'search'])->middleware('auth');

Route::get('/done', function(){return view('done');});

Route::get('/my_page', [UserInformationController::class, 'my_page'])->name('my_page')->middleware('auth');
Route::get('/delete_reservation', [UserInformationController::class, 'delete_reservation']);
Route::post('/reservation_change', [UserInformationController::class,'change']);
Route::get('/favorite', [UserInformationController::class,'favorite'])->middleware('auth');
Route::get('/evaluation', [UserInformationController::class,'evaluation']);
// Route::middleware('auth')->group(function () {
// Route::get('/', [StoreInformationController::class, 'index']);
// });

