<?php

use App\Http\Controllers\ApiCommentController;
use App\Http\Controllers\ApiTestController;
use App\Http\Controllers\BanksController;
use App\Http\Middleware\CheckJWT;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});


Route::get('allStudents',[ApiTestController::class,'getStudents']);
Route::get('studentById/{id}',[ApiTestController::class,'showStudent']);
Route::post('insert',[ApiTestController::class,'createtudent']);

Route::resource('banks', BanksController::class);
Route::get('/banks/getBank/{year}', [BanksController::class, 'showBanks']);
Route::delete('/banks/deleteBanks/{year}', [BanksController::class, 'deleteBankByYear']);

Route::get('allComments', [ApiCommentController::class,'index']);
Route::get('comment/{id}', [ApiCommentController::class, 'show']);
Route::post('create', [ApiCommentController::class, 'store'])->middleware('jwt');

