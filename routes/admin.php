<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {

    Route::get('/addProduct/view', [ProductController::class, 'addProductView'])->name('admin.add.product.view');
    Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('admin.add.product');

    Route::get('/addTools/view', [ProductController::class, 'addToolsView'])->name('admin.add.tools.view');
    Route::post('/addTag', [ProductController::class, 'addTag'])->name('admin.add.tag');
    Route::post('/addCategory', [ProductController::class, 'addCategory'])->name('admin.add.category');

    Route::get('/allProducts', [ProductController::class, 'allProducts'])->name('admin.all.products');

    Route::get('/allOrders', [ProductController::class, 'allOrders'])->name('admin.all.orders');

    Route::prefix('blog')->group(function () {

        Route::get('/addBlogTools/view', [BlogController::class, 'addBlogToolsView'])->name('admin.add.blog.tools.view');
        Route::get('/addBlog/view', [BlogController::class, 'addBlogView'])->name('admin.add.blog.view');

        Route::post('/addBlog', [BlogController::class, 'addBlog'])->name('admin.add.blog');

        Route::post('/addComment', [BlogController::class, 'addComment'])->name('admin.add.comment');
        Route::post('/addBlogTag', [BlogController::class, 'addBlogTag'])->name('admin.add.blog.tag');
        Route::post('/addBlogCategory', [BlogController::class, 'addBlogCategory'])->name('admin.add.blog.category');

    });

});

// Payment modules
Route::post('/pay/{product}', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('callbackurl');
