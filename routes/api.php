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

  Route::get('list-module-sd', [ModuleController::class,'listModuleSd']);
  Route::get('list-module-smp', [ModuleController::class,'listModuleSmp']);
  Route::get('list-module-sma', [ModuleController::class,'listModuleSma']);
  Route::get('download-moduleSd/{fileName}', [ModuleController::class,'downloadModuleSd']);
  Route::get('download-moduleSmp/{fileName}', [ModuleController::class,'downloadModule']);
  Route::get('download-moduleSma/{fileName}', [ModuleController::class,'downloadModuleSma']);
