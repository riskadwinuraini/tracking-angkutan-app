<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\TransportController;
use App\Http\Controllers\UserController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('/transport', TransportController::class);
    Route::get('/profile',[UserController::class,'profile']);
    Route::put('update-Profile/{users:id}',[UserController::class,'update'])->name('update.profile');
});

require __DIR__.'/auth.php';
