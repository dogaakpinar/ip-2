<?php

use App\Http\Controllers\LeagueController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SporcularController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransfersController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\FinancialsController;
use App\Http\Controllers\MatchOfficialsController;
use App\Http\Controllers\MatchDetailsController;
use App\Http\Controllers\MatchResultsController;
Route::get('/',[HomeController::class,"index"]);


Route::get('/news', [NewsController::class,"index"]);
Route::get('/lig2',[LeagueController::class,"index"]);
Route::get('/sporcular',[SporcularController::class,"index"]);
Route::get('/transferler',[TransfersController::class,"index"]);
Route::get('/sponsorlar',[SponsorsController::class,"index"]);
Route::get('/finansal-durum',[FinancialsController::class,"index"]);
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/hakemler', [MatchOfficialsController::class, "index"]);
Route::get('/mac-detaylari',[MatchDetailsController::class,"index"]);
Route::get('/sonuclar',[MatchResultsController::class,"index"]);
