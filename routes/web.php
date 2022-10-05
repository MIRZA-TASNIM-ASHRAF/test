<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
/*
| Web Routes
|--------------------------------------------------------------------------
|---------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|---------------------------------------------------------------------
| routes are loaded by the RouteServiceProvider within a group which
| Here is where you can register web routes for your application. These
| Here is where you caister web routes for your application. These
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('students', 'students.index');
Route::view('signin', 'auth.login');

Route::post('signin', [AuthController::class, 'signin'])->name('signin');
Route::group(['middleware' => ['role:admin']], function () {
    Route::view('admins', 'admins.index');
});