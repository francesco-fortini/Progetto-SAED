<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Auth::routes();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Operazioni di gestione e creazione corso scii per maestri
Route::post('/tipo', [App\Http\Controllers\ApiController::class, 'createtipo']);
Route::post('/corso', [App\Http\Controllers\ApiController::class, 'createcorso']);
Route::get('/mostracorsi', [App\Http\Controllers\ApiController::class, 'mostracorsi']);
Route::get('/mostracorso/{idCorso}', [App\Http\Controllers\ApiController::class, 'mostracorso']);
Route::put('/updatecorso/{idCorso}', [App\Http\Controllers\ApiController::class, 'updatecorso']);
Route::delete('/deletecorso/{idCorso}', [App\Http\Controllers\ApiController::class, 'deletecorso']);

//Operazioni di gestione prenotazioni ed iscrizioni per clienti impianto scii
Route::post('/iscrizione', [App\Http\Controllers\ApiController::class, 'iscrizione']);
Route::get('/vedicorso/{idCorso}', [App\Http\Controllers\ApiController::class, 'vedicorso']);
Route::delete('/deleteiscrizione/{idUtente}', [App\Http\Controllers\ApiController::class, 'deleteiscrizione']);

Auth::routes();