<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StdClassController;

//Route::apiResource('/class', 'Api/StdClassController');
Route::apiResource('/class', StdClassController::class);