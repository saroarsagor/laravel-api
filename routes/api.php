<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Auth Controller
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

   Route::resource('users', UserController::class);
	//Auth Controller register login
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('login',function(){
        return response()->json(['success' => false, 'errors' => 'Unauthorized'], 401);
    })->name('login');

    Route::middleware('auth:api')->group(function () {

        //Auth Controller logout
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });


