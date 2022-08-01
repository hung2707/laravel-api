<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authentication API with Passport
Route::group([ 'prefix' => 'auth' ], function ()
{
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group([ 'middleware' => 'auth:api' ], function()
    {
        Route::delete('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);

        //Blog route
        Route::resource('blogs', BlogController::class);

        //Users route
        Route::resource('users', UserController::class);

        //Categories route
        Route::resource('categories', CategoryController::class);
        Route::post('categories/{id}/update', [CategoryController::class, 'update']);

        Route::resource('tags', TagController::class);
        Route::post('tags/{id}/update', [TagController::class, 'update']);
    });
}); // End: Authentication API with Passport
