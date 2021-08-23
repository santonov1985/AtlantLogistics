<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [\App\Http\Controllers\User\MainController::class, 'index'])->name('index');
Route::get('/about', [\App\Http\Controllers\User\MainController::class, 'about'])->name('about');

//admin panel
Route::prefix('admin')->name('admin.')->group(function () {
   Route::get('/', [IndexController::class, 'index'])->name('index');
});
