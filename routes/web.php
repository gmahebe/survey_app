<?php

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
    return view('home');
});


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/questionaires/create', [\App\Http\Controllers\QuestionaireController::class, 'create'])->name('create');

Route::post('/questionaires',       [\App\Http\Controllers\QuestionaireController::class, 'store'])->name('store');

Route::get('/questionaires/{questionaire}',   [\App\Http\Controllers\QuestionaireController::class, 'show'])->name('show');

Route::get('/questionaires/{questionaire}/questions/create',   [\App\Http\Controllers\QuestionController::class, 'create'])->name('create');

Route::post('/questionaires/{questionaire}/questions',       [\App\Http\Controllers\QuestionController::class, 'store'])->name('store');

Route::get('/surveys/{questionaire}-{slug}',       [\App\Http\Controllers\SurveyController::class, 'show'])->name('show');
