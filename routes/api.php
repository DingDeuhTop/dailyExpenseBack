<?php

use App\Http\Controllers\BuyController;
use App\Http\Controllers\SellController;
use App\Models\asdf;
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

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/buy', [BuyController::class, 'index']);

// Route::controller(BuyController::class)->group(function () {
//     Route::get('/buy', 'index');
//     Route::get('/buy/{id}', 'create');
//     Route::post('/buy', 'store');
//     Route::get('/buy/{id}', 'edit');
//     Route::patch('/buy/{id}', 'update');
//     Route::delete('/buy/{id}', 'destroy');
// }); 

Route::resources(['/buy' => BuyController::class, '/sell' => SellController::class]);
// Route::resource('/buy', BuyController::class);
// Route::resource('/sell', SellController::class);
Route::resource('/asdf', asdf::class);

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('buy', BuyController::class);

// });
