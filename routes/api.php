<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use Illuminate\Support\Facades\Route;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);

Route::prefix('rest')->group(function () {
    Route::resource('books', BookRestController::class);
});

Route::prefix('restapi')->group(function () {
    Route::apiresource('books', BookApiController::class);
});
//test for commit
