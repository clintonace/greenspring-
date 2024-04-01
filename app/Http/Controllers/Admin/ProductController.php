<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
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

    public function addProduct(Request $request)
    {

        $request->validate([
            'name'=> ['required', 'string'],
            'category_id'=> ['required'],
            'price'=> ['required', 'numeric'],
            'quantity'=> ['required', 'string'],
            'status'=> ['required', 'string'],
            'description'=> ['required', 'string'],
            'image'=> ['required', 'mimes:png,jpg'],
        ]);

        // The image Section
        $image = [];
        foreach ($request->image as $img) {

            $ext = $img->getClientOriginalExtension();
            $rand = \Str::random(3);
            $imageName= \Str::slug($request->name).$rand.time().'.'.$ext;
            $img->move(public_path('assets/ProductImage'), $imageName);
        }
        $image[] =  $imageName;

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
        $product->save();


        Alert::success('Success', 'Product Added Successfully.');
        return back();

    }

    public function ()
    {

    }


}
