<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [HomeController::class, 'web'])->name('web');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/verification/{id}', [CheckoutController::class, 'verification'])->name('verification');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
});

Route::middleware(['auth', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function () {

    Route::get('/myprogress', [MemberController::class, 'myprogress'])->name('myprogress');
    Route::get('/mytransaction', [MemberController::class, 'mytransaction'])->name('mytransaction');
    
    // Route admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('package', PackageController::class);
        Route::resource('product', ProductController::class);
        Route::resource('transaction', TransactionController::class);
    });
});

require __DIR__.'/auth.php';
