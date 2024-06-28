<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('logintest','TestController@check');
});

    Route::get('/', function () {
        return view('layout.master');
    })->name('home');

    Route::prefix('/products')->group(function () {
        Route::get('/', [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');
        Route::get('/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
        Route::post('/create', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');
        Route::get('/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');
        Route::put('/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('products.update');
        Route::delete('/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products.destroy');
    });

    Route::prefix('/customers')->group(function () {
        Route::get('/index', [App\Http\Controllers\CustomersController::class, 'index'])->name('customers.index');
        Route::get('/create', [App\Http\Controllers\CustomersController::class, 'create'])->name('customers.create');
        Route::post('/create', [App\Http\Controllers\CustomersController::class, 'store'])->name('customers.store');
        Route::get('/{id}/edit', [App\Http\Controllers\CustomersController::class, 'edit'])->name('customers.edit');
        Route::put('/{id}/edit', [App\Http\Controllers\CustomersController::class, 'update'])->name('customers.update'); // Xóa mềm khách hàng
        Route::delete('/{id}', [App\Http\Controllers\CustomersController::class, 'softDelete'])->name('customers.delete');
        Route::put('/{id}/restore', [App\Http\Controllers\CustomersController::class, 'restore'])->name('customers.restore');
    });

    Route::prefix('/roles')->group(function () {
        Route::get('/', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');
        Route::get('/create', [App\Http\Controllers\RolesController::class, 'create'])->name('roles.create');
        Route::post('/create', [App\Http\Controllers\RolesController::class, 'store'])->name('roles.store');
        Route::get('/{id}/edit', [App\Http\Controllers\RolesController::class, 'edit'])->name('roles.edit');
        Route::put('/{id}', [App\Http\Controllers\RolesController::class, 'update'])->name('roles.update');
        Route::delete('/{id}', [App\Http\Controllers\RolesController::class, 'destroy'])->name('roles.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\RolesController::class, 'restore'])->name('roles.restore');
    });

    Route::prefix('/brands')->group(function () {
        Route::get('/', [App\Http\Controllers\BrandsController::class, 'index'])->name('brands.index');
        Route::get('/create', [App\Http\Controllers\BrandsController::class, 'create'])->name('brands.create');
        Route::post('/create', [App\Http\Controllers\BrandsController::class, 'store'])->name('brands.store');
        Route::get('/{id}/edit', [App\Http\Controllers\BrandsController::class, 'edit'])->name('brands.edit');
        Route::put('/{id}/edit', [App\Http\Controllers\BrandsController::class, 'update'])->name('brands.update');
        Route::delete('/{id}', [App\Http\Controllers\BrandsController::class, 'destroy'])->name('brands.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\BrandsController::class, 'restore'])->name('brands.restore');
    });

    Route::prefix('/categories')->group(function () {
        Route::get('/', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
        Route::get('/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
        Route::post('/create', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
        Route::get('/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
        Route::put('/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
        Route::delete('/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\CategoriesController::class, 'restore'])->name('categories.restore');
    });

    Route::prefix('/shipping_units')->group(function () {
        Route::get('/', [App\Http\Controllers\ShippingUnitsController::class, 'index'])->name('shipping_units.index');
        Route::get('/create', [App\Http\Controllers\ShippingUnitsController::class, 'create'])->name('shipping_units.create');
        Route::post('/create', [App\Http\Controllers\ShippingUnitsController::class, 'store'])->name('shipping_units.store');
        Route::get('/{id}/edit', [App\Http\Controllers\ShippingUnitsController::class, 'edit'])->name('shipping_units.edit');
        Route::put('/{id}', [App\Http\Controllers\ShippingUnitsController::class, 'update'])->name('shipping_units.update');
        Route::delete('/{id}', [App\Http\Controllers\ShippingUnitsController::class, 'destroy'])->name('shipping_units.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\ShippingUnitsController::class, 'restore'])->name('shipping_units.restore');
    });

    Route::prefix('/orders')->group(function () {
        Route::get('/', [App\Http\Controllers\OrdersController::class, 'index'])->name('orders.index');
        Route::get('/create', [App\Http\Controllers\OrdersController::class, 'create'])->name('orders.create');
        Route::post('/create', [App\Http\Controllers\OrdersController::class, 'store'])->name('orders.store');
        Route::get('/{id}/edit', [App\Http\Controllers\OrdersController::class, 'edit'])->name('orders.edit');
        Route::put('/{id}', [App\Http\Controllers\OrdersController::class, 'update'])->name('orders.update');
        Route::delete('/{id}', [App\Http\Controllers\OrdersController::class, 'destroy'])->name('orders.destroy');
    });

    Route::prefix('/colors')->group(function () {
        Route::get('/', [App\Http\Controllers\ColorsController::class, 'index'])->name('colors.index');
        Route::get('/create', [App\Http\Controllers\ColorsController::class, 'create'])->name('colors.create');
        Route::post('/create', [App\Http\Controllers\ColorsController::class, 'store'])->name('colors.store');
        Route::get('/{id}/edit', [App\Http\Controllers\ColorsController::class, 'edit'])->name('colors.edit');
        Route::put('/{id}', [App\Http\Controllers\ColorsController::class, 'update'])->name('colors.update');
        Route::delete('/{id}', [App\Http\Controllers\ColorsController::class, 'destroy'])->name('colors.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\ColorsController::class, 'restore'])->name('colors.restore');
    });

    Route::prefix('/payments')->group(function () {
        Route::get('/', [App\Http\Controllers\PaymentsController::class, 'index'])->name('payments.index');
        Route::get('/create', [App\Http\Controllers\PaymentsController::class, 'create'])->name('payments.create');
        Route::post('/create', [App\Http\Controllers\PaymentsController::class, 'store'])->name('payments.store');
        Route::get('/{id}/edit', [App\Http\Controllers\PaymentsController::class, 'edit'])->name('payments.edit');
        Route::put('/{id}', [App\Http\Controllers\PaymentsController::class, 'update'])->name('payments.update');
        Route::delete('/{id}', [App\Http\Controllers\PaymentsController::class, 'destroy'])->name('payments.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\PaymentsController::class, 'restore'])->name('payments.restore');
    });

    Route::prefix('/reviews')->group(function () {
        Route::get('/', [App\Http\Controllers\ReviewsController::class, 'index'])->name('reviews.index');
        Route::get('/search', [App\Http\Controllers\ReviewsController::class, 'index'])->name('reviews.search');
        Route::get('/create', [App\Http\Controllers\ReviewsController::class, 'create'])->name('reviews.create');
        Route::post('/create', [App\Http\Controllers\ReviewsController::class, 'store'])->name('reviews.store');
        Route::get('/{id}/edit', [App\Http\Controllers\ReviewsController::class, 'edit'])->name('reviews.edit');
        Route::put('/{id}', [App\Http\Controllers\ReviewsController::class, 'update'])->name('reviews.update');
        Route::delete('/{id}', [App\Http\Controllers\ReviewsController::class, 'destroy'])->name('reviews.destroy');
    });

    Route::prefix('/promotions')->group(function () {
        Route::get('/', [App\Http\Controllers\PromotionsController::class, 'index'])->name('promotions.index');
        Route::get('/create', [App\Http\Controllers\PromotionsController::class, 'create'])->name('promotions.create');
        Route::post('/create', [App\Http\Controllers\PromotionsController::class, 'store'])->name('promotions.store');
        Route::get('/{id}/edit', [App\Http\Controllers\PromotionsController::class, 'edit'])->name('promotions.edit');
        Route::put('/{id}', [App\Http\Controllers\PromotionsController::class, 'update'])->name('promotions.update');
        Route::delete('/{id}', [App\Http\Controllers\PromotionsController::class, 'destroy'])->name('promotions.destroy');
        Route::put('/{id}/restore', [App\Http\Controllers\PromotionsController::class, 'restore'])->name('promotions.restore');

    });
Route::prefix('/provinces')->group(function () {
    Route::get('/', [App\Http\Controllers\ProvincesController::class, 'index'])->name('provinces.index');
    Route::get('/create', [App\Http\Controllers\ProvincesController::class, 'create'])->name('provinces.create');
    Route::post('/create', [App\Http\Controllers\ProvincesController::class, 'store'])->name('provinces.store');
    Route::get('/{id}/edit', [App\Http\Controllers\ProvincesController::class, 'edit'])->name('provinces.edit');
    Route::put('/{id}/edit', [App\Http\Controllers\ProvincesController::class, 'update'])->name('provinces.update');
    Route::delete('/{id}', [App\Http\Controllers\ProvincesController::class, 'destroy'])->name('provinces.destroy');
    Route::put('/{id}/restore', [App\Http\Controllers\ProvincesController::class, 'restore'])->name('provinces.restore');
});
Route::prefix('/districts')->group(function () {
    Route::get('/', [App\Http\Controllers\DistrictsController::class, 'index'])->name('districts.index');
    Route::get('/create', [App\Http\Controllers\DistrictsController::class, 'create'])->name('districts.create');
    Route::post('/create', [App\Http\Controllers\DistrictsController::class, 'store'])->name('districts.store');
    Route::get('/{id}/edit', [App\Http\Controllers\DistrictsController::class, 'edit'])->name('districts.edit');
    Route::put('/{id}', [App\Http\Controllers\DistrictsController::class, 'update'])->name('districts.update');
    Route::delete('/{id}', [App\Http\Controllers\DistrictsController::class, 'destroy'])->name('districts.destroy');
    Route::put('/{id}/restore', [App\Http\Controllers\DistrictsController::class, 'restore'])->name('districts.restore');
});
Route::prefix('/wards')->group(function () {
    Route::get('/', [App\Http\Controllers\WardsController::class, 'index'])->name('wards.index');
    Route::get('/create', [App\Http\Controllers\WardsController::class, 'create'])->name('wards.create');
    Route::post('/create', [App\Http\Controllers\WardsController::class, 'store'])->name('wards.store');
    Route::get('/{id}/edit', [App\Http\Controllers\WardsController::class, 'edit'])->name('wards.edit');
    Route::put('/{id}/edit', [App\Http\Controllers\WardsController::class, 'update'])->name('wards.update');
    Route::delete('/{id}', [App\Http\Controllers\WardsController::class, 'destroy'])->name('wards.destroy');
    Route::put('/{id}/restore', [App\Http\Controllers\WardsController::class, 'restore'])->name('wards.restore');
});

Route::prefix('/carts')->group(function () {
    Route::get('/', [App\Http\Controllers\WardsController::class, 'index'])->name('carts.index');
    Route::post('/', [App\Http\Controllers\WardsController::class, 'store'])->name('carts.store');
    Route::put('/{id}', [App\Http\Controllers\WardsController::class, 'update'])->name('carts.update');
    Route::delete('/{id}', [App\Http\Controllers\WardsController::class, 'destroy'])->name('carts.destroy');
});
