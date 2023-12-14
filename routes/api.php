<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return response()->json([
//         'user' => $request->user(),
//     ]);
// });

Route::post('/register', [RegisterController::class, 'apiRegister']);
Route::post('/login', [LoginController::class, 'apiLogin']);

Route::middleware('auth:sanctum')->get('/userList',[UserController::class, 'apiList']);
