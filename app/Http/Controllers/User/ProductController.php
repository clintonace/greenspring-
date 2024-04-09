<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

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

        return view('allBlogs');
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
