<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleController;

Route::group([
    'prefix' => 'auth'
  ], function () {
    Route::post('register', [AuthController::class,'register']);
    Route::post('login', [AuthController::class,'login']);
    Route::group([
      'middleware' => 'auth:api'
    ], function(){
      Route::post('logout', [AuthController::class,'logout']);
      Route::post('refresh', [AuthController::class, 'refresh']);
      Route::get('me', [AuthController::class,'me']);
      
      Route::group([
        'middleware' => 'auth:api'
      ], function () {
        
      });
      
    });
  });

  Route::get('list-module', [ModuleController::class,'listModule']);
  Route::get('download-module/{fileName}', [ModuleController::class,'downloadModule']);
