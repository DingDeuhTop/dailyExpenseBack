<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resources([
        '/buy' => BuyController::class,
        '/sell' => SellController::class,
        '/ba' => BaController::class,
        '/customer' => CustomerController::class
    ]);
    Route::get('customer_ba', [BaController::class, 'customerBa']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/updateDetail', [AuthController::class, 'updateDetail']);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
