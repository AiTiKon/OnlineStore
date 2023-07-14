<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
 });

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin-index');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/pay', [BasketController::class, 'pay'])->name('basket-pay');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');

Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product}', [MainController::class, 'product'])->name('product');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
