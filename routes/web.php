<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guichet\GuichetOneController;
use App\Http\Controllers\Guichet\GuichetTwoController;
use App\Http\Controllers\Guichet\GuichetThreeController;
use App\Http\Controllers\Guichet\GuichetFourController;
use App\Http\Controllers\Guichet\GuichetFiveController;

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


Route::get('/', function () {return view('frontend/accueil');});

Route::get('/guichet1', [GuichetOneController::class, 'index'])->name('guichet1');
