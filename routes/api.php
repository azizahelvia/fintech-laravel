<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BuyerController;
use App\Http\Controllers\Api\InventoryController;
use App\Http\Controllers\Api\TransactionController;
use App\Models\Transaction;

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

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/inventories', [InventoryController::class, 'index']);
    Route::post('/inventories', [InventoryController::class, 'store']);
    Route::get('/inventories/{id}', [InventoryController::class, 'show']);
    Route::put('/inventories/{id}', [InventoryController::class, 'update']);
    Route::delete('/inventories/{id}', [InventoryController::class, 'destroy']);

    Route::get('/buyers', [BuyerController::class, 'index']);
    Route::post('/buyers', [BuyerController::class, 'store']);
    Route::get('/buyers/{id}', [BuyerController::class, 'show']);
    Route::delete('/buyers/{id}', [BuyerController::class, 'destroy']);

    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::post('/transactions', [TransactionController::class, 'store']);
    Route::post('/transactions/{id}', [TransactionController::class, 'update']);
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']);
});