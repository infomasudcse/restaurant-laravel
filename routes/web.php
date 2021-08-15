<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodcategoryController;
use App\Http\Controllers\FoodController;
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

Route::get('/', [WebController::class, 'index']);

// Route::get('/ciao', function(){
//     return 'admin';
// });



Route::middleware(['auth', 'admin'])->group(function(){


    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resources([
        'food-category' => FoodcategoryController::class,
        'food' => FoodController::class,
    ]);




});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
