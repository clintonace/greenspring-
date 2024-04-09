<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function checkoutView($slug)
    {

        $product = Product::whereSlug($slug)->first();

        return view('guest.checkout', compact('product'));
    }

    public function searchProductView(Request $request)
    {

        $products = Product::where('name', 'like' ,'%'.$request->search.'%')->orWhere('description', 'like' ,'%'.$request->search.'%')->get();

        return view('searchProductView', compact('products'));

    }

    public function singleBlogView($b)
    {

        $blog = Blog::whereSlug($b)->first();
        $blogs = Blog::latest()->paginate(3);
        return view('singleblog', compact('blog', 'blogs'));
    }

    public function aboutUsView()
    {

        return view('about');
    }
    public function serviceView()
    {

        return view('service');
    }
    public function contactView()
    {

        return view('contact');
    }
    public function allBlogsView()
    {

        $blogs = Blog::latest()->paginate(10);
        return view('allBlogs', compact('blogs'));
    }

    public function allProductsView()
    {

        $products = Product::all();
        $cats = Category::all();

        return view('guest.allProducts', compact('products','cats'));

    }

    public function singleProductView($p)
    {

        $product = Product::whereSlug($p)->first();
        $cats = Category::all();

        return view('guest.singleProducts', compact('product', 'cats'));

    }

    public function paytest(Request $request)
    {

        if ($request->paystack == 'paystack') {

        dd($request->all());

        }

    }
}
