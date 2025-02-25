<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CreateCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::post('categories', [CreateCategoryController::class, 'store']);
});