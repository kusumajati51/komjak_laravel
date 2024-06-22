<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BanerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'article'], function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/{slug}', [ArticleController::class, 'show']);
});

Route::group(['prefix' => 'baner'], function () {
    Route::get('/', [BanerController::class, 'index']);
});
