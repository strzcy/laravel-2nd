<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\ProductSettingsController;
use App\Http\Controllers\DashboardUserController;


Route::get('/dashboard/user', [DashboardUserController::class, 'index'])->name('dashboard.user');


Route::prefix('admin')->group(function () {
    Route::get('/product-settings', [ProductSettingsController::class, 'index'])->name('product.settings.index');
    Route::post('/product-settings/update', [ProductSettingsController::class, 'updateVisibility'])->name('product.settings.updateVisibility');
});

Route::post('/franchise/store', [FranchiseController::class, 'store'])->name('franchise.store');
Route::get('/franchise', [FranchiseController::class, 'reqFranchise'])->name('reqFranchise');


Route::get('/', function () {
    return view('welcome');
});
 
Route::get('products/settings', [ProductController::class, 'settings'])->name('products.settings');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('db', [DashboardUserController::class, 'index'])->name('db');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User
    Route::post('/franchise/store', [FranchiseController::class, 'store'])->name('franchise');


    Route::post('/products/toggle/{id}', [ProductController::class, 'toggleStatus'])->name('products.toggle');

    Route::post('/franchise', [FranchiseController::class, 'store']);


});
