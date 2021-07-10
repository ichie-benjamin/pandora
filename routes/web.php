<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\restaurantsController;
use App\Http\Controllers\SeederController;
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

Auth::routes();

Route::get('/home', [PagesController::class, 'index'])->name('home');

Route::get('/seeder/res', [ SeederController::class, 'res'])->name('seeder.res');

Route::get('/restaurant/{slug}', [restaurantsController::class, 'getRes'])->name('res.view');


Route::resource('restaurants', App\Http\Controllers\restaurantsController::class);

