<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logins;



Route::get('/index', [App\Http\Controllers\Logins::class,'index']);

Route::get('/create', [App\Http\Controllers\Logins::class,'create']);
Route::post('/create', [App\Http\Controllers\Logins::class,'insert']);
