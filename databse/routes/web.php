<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logins;



Route::get('/index', [App\Http\Controllers\Logins::class,'index']);

Route::get('/create', [App\Http\Controllers\Logins::class,'create']);
Route::post('/create', [App\Http\Controllers\Logins::class,'insert']);

Route::get('/{id}/edit', [App\Http\Controllers\Logins::class,'edit']);
Route::put('/{id}/edit', [App\Http\Controllers\Logins::class,'updates']);