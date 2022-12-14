<?php

use App\Http\Controllers\Backend\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Guichet\GuichetOneController;
use App\Http\Controllers\Frontend\Guichet\GuichetTwoController;
use App\Http\Controllers\Frontend\Guichet\GuichetThreeController;
use App\Http\Controllers\Frontend\Guichet\GuichetFourController;
use App\Http\Controllers\Frontend\Guichet\GuichetFiveController;
use App\Http\Controllers\Frontend\User\UserController;
use App\Http\Controllers\Backend\UserBackendController;
use App\Http\Controllers\Backend\Admin\GuichetOne\GuichetOneBackendController;
use App\Http\Controllers\Backend\Admin\GuichetThree\GuichetThreeBackendController;
use App\Http\Controllers\Backend\Admin\GuichetFour\GuichetFourBackendController;
use App\Http\Controllers\Backend\Admin\GuichetFive\GuichetFiveBackendController;
use App\Http\Controllers\Backend\Mentor\DashMentorController;
use App\Http\Controllers\Backend\Promoteur\DashPromoteurController;
use App\Http\Controllers\Backend\Promoteur\SuiviProjetController;

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

Route::get('/', function () {return view('frontend/accueil');})->name('home');
Route::get('/eligibilite', function () {return view('frontend/eligibilite');})->name('eligibilite');
Route::get('/apropos', function () {return view('frontend/apropos');})->name('apropos');
Route::get('/contacts', function () {return view('frontend/contacts');})->name('contacts');

Route::get('/guichet1', [GuichetOneController::class, 'index'])->name('guichet1');
Route::get('/guichet2', [GuichetTwoController::class, 'index'])->name('guichet2');
Route::get('/guichet3', [GuichetThreeController::class, 'index'])->name('guichet3');
Route::get('/guichet4', [GuichetFourController::class, 'index'])->name('guichet4');
Route::get('/guichet5', [GuichetFiveController::class, 'index'])->name('guichet5');



Route::get('/projetguichet1_form', [GuichetOneController::class, 'form_projetguichet1'])->name('form.projetguichet1');
Route::post('/projetguichet1_form/store', [GuichetOneController::class, 'store'])->name('form.projetguichet1.store');
Route::get('/successful', [GuichetOneController::class, 'successful'])->name('form.projetguichet1.successful');

Route::get('/projetguichet3_form', [GuichetThreeController::class, 'form_projetguichet3'])->name('form.projetguichet3');
Route::post('/store', [GuichetThreeController::class, 'store'])->name('form.projetguichet3.store');
Route::get('/successful', [GuichetThreeController::class, 'successful'])->name('form.projetguichet3.successful');

Route::get('/projetguichet4co_form', [GuichetFourController::class, 'form_projetguichet4co'])->name('form.projetguichet4co');
Route::get('/projetguichet4ac_form', [GuichetFourController::class, 'form_projetguichet4ac'])->name('form.projetguichet4ac');
Route::get('/projetguichet5_form', [GuichetFiveController::class, 'form_projetguichet5'])->name('form.projetguichet5');

Route::get('ajax/villeByRegionId/show/{id}', [GuichetOneController::class,'showVilleByRegionId'])->name('region.ville.show');

Route::group(['prefix' => 'mentor', 'as' => 'mentor.'], function (){
    Route::get('/mentor_form', [GuichetOneController::class, 'form_mentor'])->name('form');
    Route::post('/mentor_store', [GuichetOneController::class, 'mentorStore'])->name('form');
});

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
    Route::get('/connexion', [UserBackendController::class, 'index'])->name('index');
    Route::post('/login', [UserBackendController::class, 'login'])->name('login');
    Route::post('/logout', [UserBackendController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['role:admin|promoteur','auth']], function () {

        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('tableau-de-board', [DashboardController::class, 'index'])->name('dashboard');

            Route::group(['prefix' => 'one-guichet', 'as' => 'guichet-one.'], function () {
                Route::get('index', [GuichetOneBackendController::class, 'index'])->name('index');
                Route::get('getindex',[GuichetOneBackendController::class,'getIndex'])->name('getindex');
            });

            Route::group(['prefix' => 'guichet-three', 'as' => 'guichet-three.'], function () {
                Route::get('index', [GuichetThreeBackendController::class, 'index'])->name('index');
                Route::get('getindex',[GuichetThreeBackendController::class,'getIndex'])->name('getindex');
            });

            Route::group(['prefix' => 'guichet-four', 'as' => 'guichet-four.'], function () {
                Route::get('index', [GuichetFourBackendController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'guichet-five', 'as' => 'guichet-five.'], function () {
                Route::get('index', [GuichetFiveBackendController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            });
        });

        Route::group(['prefix' => 'promoteur', 'as' => 'promoteur.'], function () {
            Route::get('tableau-de-board', [DashPromoteurController::class, 'index'])->name('dashboard');
            Route::get('mes-suivie', [SuiviProjetController::class, 'index'])->name('suiviprojet');
        });

        Route::group(['prefix' => 'mentor', 'as' => 'mentor.'], function () {
            Route::get('tableau-de-board', [DashMentorController::class, 'index'])->name('dashboard');
        });

    });
});
