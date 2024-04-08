<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Nette\Utils\Random;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    public function addCategory(Request $request)
    {

        $request->validate([
            'name'=> ['required', 'string', 'max:20'],
            //ensure to let  them know the lenght (Lorem ipsum dolor s)
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        Alert::success('Success', 'Category added successfully.');
        return back();
    }

    public function addTag(Request $request)
    {

        $request->validate([
            'name'=> ['required', 'string', 'max:20'],
            //ensure to let  them know the lenght (Lorem ipsum dolor s)
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

        Alert::success('Success', 'Tag added successfully.');
        return back();
    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'name'=> ['required', 'string', 'unique:'.Product::class],
            'category_id'=> ['required'],
            'price'=> ['required', 'numeric'],
            'quantity'=> ['required', 'string'],
            'status'=> ['required', 'string'],
            'description'=> ['required', 'string'],
            'image.*' => 'required|mimes:png,jpeg',
        ]);


        // The image Section
        $image = [];
        foreach ($request->image as $img) {

            $ext = $img->getClientOriginalExtension();
            $rand = \Str::random(3);
            $imageName= \Str::slug($request->name).$rand.time().'.'.$ext;
            $img->move(public_path('assets/ProductImage'), $imageName);
            $image[] =  $imageName;

        }

        // The video Section
        $ext = $request->video->getClientOriginalExtension();
        $rand = \Str::random(3);
        $videoName= \Str::slug($request->name).$rand.time().'.'.$ext;
        $request->video->move(public_path('assets/ProductVideo'), $videoName);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id =$request->category_id;
        $product->price =$request->price;
        $product->quantity =$request->quantity;
        $product->status =$request->status;
        $product->description =$request->description;
        $product->image =implode('|', $image);
        $product->video = $videoName;
        $product->slug = \Str::slug($request->name);
        $product->save();


        Alert::success('Success', 'Product Added Successfully.');
        return back();

    }

    public function addProductView()
    {

        $cats = Category::all();
        return view('admin.manageProducts.addproducts', compact('cats'));

    }

    public function addToolsView()
    {
        $cats = Category::all();
        return view('admin.addTools.index', compact('cats'));

    }

    public function userIndex()
    {

        $user = User::all();
      return view('admin.manageUsers.index', compact('user'));

    }

    public function allProducts()
    {

        $procucts = Product::latest()->paginate(4);
        return view('admin.manageProducts.allproduscts', compact('products'));

    }

    public function allOrders()
    {

        $paid = Purchase::with('product')->latest()->paginate(4);
        return view('admin.manageProducts.allorders', compact('paid'));

    }

    public function singleOrder($purchase)
    {

        $order = Purchase::with('trnx')->find($purchase);
        return view('admin.manageProducts.singleorder', compact('order'));
    }

    public function deliveredOrder($order)
    {

        $delivered = Purchase::find($order);

        $delivered->delivered = 'Yes';
        $delivered->save();
        return back();

    }

    public function returnedOrder($order)
    {

        $returned = Purchase::find($order);

        $returned->delivered = 'Returned';
        $returned->save();
        return back();

    }



}
