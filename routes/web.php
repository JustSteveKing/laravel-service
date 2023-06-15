<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => ['foo' => 'bar']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
