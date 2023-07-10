<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacoesController;

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

Route::get('/', [OperacoesController::class, 'index']);

Route::post('/operacao', [OperacoesController::class, 'operacao']);
Route::get('/historico', [OperacoesController::class, 'historico']);
Route::post('/limpar', [OperacoesController::class, 'limpar']);