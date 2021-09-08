<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\StudentSearchController;
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
        // Route::get('/users', function () {
                
            
        // });
        
    });

Route::get('search',[StudentSearchController::class,'index']);
Route::get('completed',[StudentSearchController::class,'search'])->name('complete');
Route::get('getStudent',[StudentSearchController::class,'singleStudent'])->name('student');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
