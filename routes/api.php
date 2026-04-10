<?php

use App\Http\Controllers\Api\PriceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/prices',           [PriceController::class, 'index']);
Route::get('/prices/{crop}',    [PriceController::class, 'byCrop']);
Route::get('/markets',          [PriceController::class, 'markets']);
Route::get('/crops',            [PriceController::class, 'crops']);

