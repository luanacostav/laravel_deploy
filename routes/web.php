<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/api-data', [ApiController::class, 'getData']);
Route::post('/api-data', [ApiController::class, 'postData']);
