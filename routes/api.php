<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Register
Route::post('register', [RegisterController::class, 'register']);
// Login
Route::post('login', [RegisterController::class, 'login']);
// Reset password
Route::post('reset-password', [RegisterController::class, 'resetPassword']);


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'cache cleard!!';
});


Route::group(['middleware' => 'auth:api'], function () {
    //
    Route::get('/', [UsersController::class, 'index']);
    // Get users list
    Route::get('user-list', [UsersController::class, 'getUsers']);
    // Get user profile
    Route::get('user-profile', [UsersController::class, 'userProfile']);
    // Profile image update
    Route::post('profile-image-update', [UsersController::class, 'profileimgUpdate']);
    // User logout
    Route::post('logout', [RegisterController::class, 'logout']);
    // Password update
    Route::post('password-update', [RegisterController::class, 'passwordUpdate']);
    // Profile update
    Route::post('profile-update', [RegisterController::class, 'profileUpdate']);

    Route::get('user-roles', [UsersController::class, 'userRoles']);
});