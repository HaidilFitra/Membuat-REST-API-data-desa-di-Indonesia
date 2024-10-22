<?php

use App\Http\Controllers\API\VillageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(VillageController::class)->group(function () {
    Route::get('/village', 'index');
    Route::get('/village/show/{id}', 'show');
    Route::post('/village/store', 'store');
    Route::post('/village/update/{id}', 'update');
    Route::delete('/village/delete/{id}', 'destroy');
});

