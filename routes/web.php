<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guichet\GuichetOneController;
use App\Http\Controllers\Guichet\GuichetTwoController;
use App\Http\Controllers\Guichet\GuichetThreeController;
use App\Http\Controllers\Guichet\GuichetFourController;
use App\Http\Controllers\Guichet\GuichetFiveController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserBackendController;

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
    return view('frontend/accueil');
})->name('home');

Route::get('/guichet1', [GuichetOneController::class, 'index'])->name('guichet1');
Route::get('/guichet2', [GuichetTwoController::class, 'index'])->name('guichet2');
Route::get('/guichet3', [GuichetThreeController::class, 'index'])->name('guichet3');
Route::get('/guichet4', [GuichetFourController::class, 'index'])->name('guichet4');
Route::get('/guichet5', [GuichetFiveController::class, 'index'])->name('guichet5');
Route::get('/mentor_form', [GuichetOneController::class, 'form_mentor'])->name('mentor.form');
Route::get('/projetguichet1_form', [GuichetOneController::class, 'form_projetguichet1'])->name('form.projetguichet1');
Route::get('/projetguichet3_form', [GuichetThreeController::class, 'form_projetguichet3'])->name('form.projetguichet3');

Route::get('/projetguichet4co_form', [GuichetFourController::class, 'form_projetguichet4co'])->name('form.projetguichet4co');
Route::get('/projetguichet4ac_form', [GuichetFourController::class, 'form_projetguichet4ac'])->name('form.projetguichet4ac');
Route::get('/projetguichet5_form', [GuichetFiveController::class, 'form_projetguichet5'])->name('form.projetguichet5');

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::get('connexion', [UserController::class, 'index'])->name('index');
    Route::get('enregistrer', [UserController::class, 'indexRegister'])->name('enregistrer');
    Route::post('/store',[UserController::class, 'storeDemandeur'])->name('storeDemandeur');
    Route::post('/logout',[UserController::class, 'logout'])->name('logout');
    Route::get('/api', [UserController::class, 'apiGetMatricule'])->name('api');
    Route::get('/successful',[UserController::class, 'successful'])->name('successful');
});

Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::get('/connexion', [UserBackendController::class, 'index'])->name('login');
    Route::get('tableau-de-board', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'guichet-un', 'as' => 'guichet-un.'], function () {
    });

    Route::group(['prefix' => 'guichet-trois', 'as' => 'guichet-trois.'], function () {
    });

    Route::group(['prefix' => 'guichet-quatre', 'as' => 'guichet-quatre.'], function () {
    });

    Route::group(['prefix' => 'guichet-cinq', 'as' => 'guichet-cinq.'], function () {
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    });

});
