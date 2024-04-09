<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {


    Route::get('/usersProfile/{user}', [UserController::class, 'usersProfile'])->name('users.profile');
    Route::get('/users', [UserController::class, 'users'])->name('users');
    Route::get('/myProfile', [UserController::class, 'myProfile'])->name('my.profile');
    Route::post('/editProfile/{user}', [UserController::class, 'editProfile'])->name('edit.profile');

    Route::post('/searchUser/view', [UserController::class, 'searchUser'])->name('admin.search.users');

    Route::post('/giveRole/{user}', [UserController::class, 'giveRole'])->name('give.role');
    Route::post('/delete/{user}', [UserController::class, 'deleteUser'])->name('delete.user');


    Route::post('/searchProduct/view', [ProductController::class, 'searchProduct'])->name('admin.search.product');

    Route::get('/singleProduct/view/{slug}', [ProductController::class, 'singleProductView'])->name('admin.single.product.view');
    Route::get('/addProduct/view', [ProductController::class, 'addProductView'])->name('admin.add.product.view');
    Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('admin.add.product');
    Route::post('/editProduct/{product}', [ProductController::class, 'editProduct'])->name('admin.edit.product');
    Route::get('/editProduct/view/{product}', [ProductController::class, 'editProductView'])->name('admin.edit.product.view');
    Route::post('/deleteProduct/{product}', [ProductController::class, 'deleteProduct'])->name('admin.delete.product');

    Route::post('/editProductImage/{img}/{product}', [ProductController::class, 'editProductImage'])->name('admin.edit.product.image');
    Route::post('/deleteProductImage/{img}/{product}', [ProductController::class, 'deleteProductImage'])->name('admin.delete.product.image');

    Route::get('/addTools/view', [ProductController::class, 'addToolsView'])->name('admin.add.tools.view');
    Route::post('/addTag', [ProductController::class, 'addTag'])->name('admin.add.tag');
    Route::post('/addCategory', [ProductController::class, 'addCategory'])->name('admin.add.category');
    Route::post('/editProductCategory/{cat}', [ProductController::class, 'editProductCategory'])->name('admin.edit.product.category');

    Route::get('/allProducts', [ProductController::class, 'allProducts'])->name('admin.all.products');

    Route::get('/allOrders', [ProductController::class, 'allOrders'])->name('admin.all.orders');

    Route::get('/singleOrder/{purchase}', [ProductController::class, 'singleOrder'])->name('admin.single.order');
    Route::post('/delivered/{order}', [ProductController::class, 'deliveredOrder'])->name('admin.deliver.order');
    Route::post('/returned/{order}', [ProductController::class, 'returnedOrder'])->name('admin.return.order');


    Route::prefix('blog')->group(function () {

        Route::post('/addBlog', [BlogController::class, 'addBlog'])->name('admin.add.blog');
        Route::get('/addBlogTools/view', [BlogController::class, 'addBlogToolsView'])->name('admin.add.blog.tools.view');
        Route::get('/addBlog/view', [BlogController::class, 'addBlogView'])->name('admin.add.blog.view');
        Route::get('/allBlogs/view', [BlogController::class, 'allBlogs'])->name('admin.all.blogs');

        Route::get('/singleBlog/view/{slug}', [BlogController::class, 'singleBlogView'])->name('admin.single.blog');
        Route::post('/deleteBlog/{blog}', [BlogController::class, 'deleteBlog'])->name('admin.delete.blog');

        Route::get('/editBlog/view/{slug}', [BlogController::class, 'editBlogView'])->name('admin.edit.blog.view');
        Route::post('/editBlog/{slug}', [BlogController::class, 'editBlog'])->name('admin.edit.blog');
        Route::post('/editBlogImage/{img}/{blog}', [BlogController::class, 'editBlogImage'])->name('admin.edit.blog.image');
        Route::post('/deleteBlogImage/{img}/{blog}', [BlogController::class, 'deleteBlogImage'])->name('admin.delete.blog.image');

        Route::get('/singleComment/view/{id}', [BlogController::class, 'singleCommentView'])->name('admin.single.comment.view');
        Route::post('/commentApprove/{id}', [BlogController::class, 'commentApprove'])->name('admin.approve.comment');
        Route::post('/commentDelete/{id}', [BlogController::class, 'commentDelete'])->name('admin.delete.comment');


        Route::get('/pendingComment/view', [BlogController::class, 'pendingCommentsView'])->name('admin.pending.comment.view');
        Route::get('/approvedComment/view', [BlogController::class, 'approvedCommentsView'])->name('admin.approved.comment.view');


        Route::post('/addComment', [BlogController::class, 'addComment'])->name('admin.add.comment');

        Route::post('/addBlogTag', [BlogController::class, 'addBlogTag'])->name('admin.add.blog.tag');
        Route::post('/editBlogTag/{tag}', [BlogController::class, 'editBlogTag'])->name('admin.edit.blog.tag');

        Route::post('/addBlogCategory', [BlogController::class, 'addBlogCategory'])->name('admin.add.blog.category');
        Route::post('/editBlogCategory/{cat}', [BlogController::class, 'editBlogCategory'])->name('admin.edit.blog.category');

        Route::post('/searchBlog/view', [BlogController::class, 'searchBlog'])->name('admin.search.blog');

    });

});

// Payment modules
Route::post('/pay/{product}', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('callbackurl');
