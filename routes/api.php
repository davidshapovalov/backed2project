<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeRestController;
use App\Http\Controllers\TimeRpcController;

Route::get('/rest/time', [TimeRestController::class, 'index']);
Route::get('/rpc/time', [TimeRpcController::class, 'getTime']);

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);

Route::prefix('rest')->group(function () {
    Route::resource('books', BookRestController::class);
});

Route::prefix('restapi')->group(function () {
    Route::apiResource('books', BookApiController::class);
});
