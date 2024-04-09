<?php

use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $products = Product::latest()->paginate(2);
    $cats = Category::all();
    $blogs = Blog::with('comments')->latest()->paginate(3);

    return view('welcome',compact('products','cats', 'blogs'));
})->name('/');

Route::get('/dashboard', function () {

    $blogs = Blog::all();
    $products = Product::all();
    $categories = Category::all();
    $comments =Comment::all();
    $orders = Purchase::latest()->sum('price');

    // dd($orders);

    if (Auth::user()->role = 007) {

        return view('dashboard', compact('orders','comments','blogs','products','categories'));

    }

})->middleware(['auth','verified'])->name('dashboard');


Route::prefix('guest')->group(function () {

    Route::get('/allblogs/view', [ProductController::class, 'allBlogsView'])->name('user.blog.view');
    Route::get('/contactus/view', [ProductController::class, 'contactView'])->name('user.contact.view');
    Route::get('/aboutus/view', [ProductController::class, 'aboutUsView'])->name('user.aboutus.view');
    Route::get('/allProducts/view', [ProductController::class, 'allProductsView'])->name('user.all.products.view');
    Route::get('/singleProduct/view/{product}', [ProductController::class, 'singleProductView'])->name('user.single.product.view');
    Route::get('/singleBlog/view/{blog}', [ProductController::class, 'singleBlogView'])->name('user.single.blog.view');
    Route::post('/searchProduct/view', [ProductController::class, 'searchProductView'])->name('user.search.product');

    Route::get('/checkout/{product}', [ProductController::class, 'checkoutView'])->name('checkout');

});


Route::post('/paytest/{product}', [ProductController::class, 'paytest'])->name('user.buy');



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
