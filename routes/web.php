<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\table;



Route::get('/',   [\App\Http\Controllers\ImagesController::class, 'index']);

Route::get('/about',  [\App\Http\Controllers\HomeController::class, 'about']);

Route::post('/store',[\App\Http\Controllers\ImagesController::class, 'store']);

Route::get('/addImage', [\App\Http\Controllers\ImagesController::class, 'addImage']);

Route::get('/show/{id}', [\App\Http\Controllers\ImagesController::class, 'show']);

Route::get('/edit/{id}', [\App\Http\Controllers\ImagesController::class, 'edit']);

Route::post('/update/{id}', [\App\Http\Controllers\ImagesController::class, 'update']);

Route::get('/delete/{id}', [\App\Http\Controllers\ImagesController::class, 'delete']);
