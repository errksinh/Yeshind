<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\AboutusController;


Route::get('/', [HomeController::class,'index']);
Route::get('/application', [ApplicationController::class,'index']);
Route::get('/contactus', [ContactusController::class,'index']);
Route::get('/products', [ProductsController::class,'index']);
Route::get('/vision', [VisionController::class,'index']);
Route::get('/aboutus', [AboutusController::class,'index']);

