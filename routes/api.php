<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::post('/order', 'App\Http\Controllers\OrderController@store');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

