<?php

use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\TevekenysegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bejegyzesek',[BejegyzesController::class, 'index']);
Route::get('/bejegyzesek/{osztaly_id}',[BejegyzesController::class, 'index']);
Route::get('/tevekenysegek',[TevekenysegController::class, 'index']);
