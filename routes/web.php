<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\StudentSearchController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\CoursesController;

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

///LECTURER CONTROLLERS
Route::prefix('lecturer')->group(function () {
    Route::get('/register',[LecturersController::class,'index']);
    Route::get('/all',[LecturersController::class,'show']);
    Route::post('/register',[LecturersController::class,'store'])->name('lecturer_info');  
    });
Route::prefix('courses')->group(function () {
    Route::get('/register',[CoursesController::class,'index']);
    Route::post('/register',[CoursesController::class,'store'])->name('courses_info');  
    Route::get('/lecturer_search',[CoursesController::class,'search'])->name('search.lecturer');  
    });
    


Route::get('search',[StudentSearchController::class,'index']);
Route::get('completed',[StudentSearchController::class,'search'])->name('complete');
Route::get('getStudent',[StudentSearchController::class,'singleStudent'])->name('student');

///LECTURER CONTROLLERS


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('admin');
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index'])->name('staff.home')->middleware('staff');

