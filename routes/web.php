<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\NewsController;

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
Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin panel
Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'admin'], function () {

        //Logout
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('/', [AdminController::class, 'index'])->name('admin');

        //Main Page
        Route::get('/main-page', [MainPageController::class, 'mainIndex'])->name('main-index');

        //News
        Route::get('/news', [NewsController::class, 'index'])->name('news.index');
        Route::get('/news-create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/news-store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/news-edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('/news-update/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::get('/news-delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');

        //Service
        Route::get('/service', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service.index');
        Route::get('/service-create', [\App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('service.create');
        Route::post('/service-store', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('service.store');
        Route::get('/service-edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/service-update/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('service.update');
        Route::get('/service-delete/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('service.delete');


        //About
        Route::get('/about', [\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about.index');
        Route::get('/about-create', [\App\Http\Controllers\Admin\AboutController::class, 'create'])->name('about.create');
        Route::post('/about-store', [\App\Http\Controllers\Admin\AboutController::class, 'store'])->name('about.store');
        Route::get('/about-edit/{id}', [\App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('about.edit');
        Route::post('/about-update/{id}', [\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');

    });

});

Route::get('/', [\App\Http\Controllers\User\MainController::class, 'index'])->name('index');
Route::get('/about', [\App\Http\Controllers\User\AboutUserController::class, 'index'])->name('about');
Route::get('/contact', [\App\Http\Controllers\User\ContactController::class, 'index'])->name('contact');
Route::get('/order', [\App\Http\Controllers\User\OrderController::class, 'index'])->name('order');

Route::get('/news', [\App\Http\Controllers\User\NewsUserController::class, 'index'])->name('news');
Route::get('/news/{id}', [\App\Http\Controllers\User\NewsUserController::class, 'show'])->name('news.show');

Route::get('/service', [\App\Http\Controllers\User\ServiceUserController::class, 'index'])->name('service');









