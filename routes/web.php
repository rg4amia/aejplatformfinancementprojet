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
Route::get('/guichet2', [GuichetTwoController::class, 'index'])->name('guichet2');
Route::get('/guichet3', [GuichetThreeController::class, 'index'])->name('guichet3');
Route::get('/guichet4', [GuichetFourController::class, 'index'])->name('guichet4');
Route::get('/guichet5', [GuichetFiveController::class, 'index'])->name('guichet5');
Route::get('/mentor_form', [GuichetOneController::class, 'form_mentor'])->name('mentor.form');
Route::get('/projetguichet1_form', [GuichetOneController::class, 'form_projetguichet1'])->name('form.projetguichet1');
