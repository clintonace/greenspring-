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
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Unique;
use Nette\Utils\Random;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{

    public function editProduct(Request $request, $p)
    {
        $request->validate([
            'name'=>'string',
            'quantity'=>'string',
            'price'=>'string',
            'status'=>'string',
            'category_id'=>'string',
            'description'=>'string',
        ]);

        $product= Product::find($p);
        $product->name= $request->name;
        $product->quantity= $request->quantity;
        $product->price= $request->price;
        $product->status= $request->status;
        $product->category_id= $request->category_id;
        $product->description= $request->description;
        $product->save();
        Alert::success('Success', 'Successfully edited');
        return back();

    }

    public function editProductImage(Request $request, $img, $p)
    {

        $request->validate([
            'image'=>'required',
        ]);

        $product = Product::find($p);

        // Get the path of the old image
        $oldImagePath = public_path('/assets/ProductImage') . DIRECTORY_SEPARATOR . $img;


        $ext =$request->file('image')->getClientOriginalExtension();
        $rand = rand(10, 99).'_ED_IMG_'.rand(10, 99);   // The ED shows that this image has being edited.
        $newImage= \Str::slug($product->name).'_'.$rand.'.'.$ext;
        $request->image->move(public_path('/assets/ProductImage'), $newImage);

        File::delete($oldImagePath);

        $images=explode('|',$product->image);
        $index=array_search($img,$images,true);

        $images[$index]=$newImage;

        $product->image= implode('|',$images);
        $product->save();

        Alert::success('Success','Image Edited Successfully');
        return back();

    }

    public function deleteProductImage(Request $request, $img, $p)
    {

        $product = Product::find($p);

        // Get the path of the old image
        $oldImagePath = public_path('/assets/ProductImage') . DIRECTORY_SEPARATOR . $img;

        File::delete($oldImagePath);

        $images=explode('|',$product->image);
        $index=array_search($img,$images,true);

        if ($index !== false) {
            unset($images[$index]); // Delete the element at the specified index
        }

        $product->image= implode('|',$images);
        $product->save();

        Alert::success('Success','Image Deleted Successfully');
        return back();

    }


    public function editProductView($p)
    {
        $product = Product::whereSlug($p)->first();
        $cats = Category::all();
        return view('admin.manageProducts.editproduct', compact('product', 'cats'));
    }

    public function deleteProduct($p)
    {

        $product = Product::find($p);
        $product->delete();
        Alert::success('Success', 'Product Deleted Successfully.');
        return back();
    }

    public function singleProductView($p)
    {

        $product = Product::whereSlug($p)->first();
        return view('admin.manageProducts.singleProduct', compact('product'));

    }

    public function searchProduct(Request $request)
    {

        $products = Product::where('name', 'like' ,'%'.$request->search.'%')->orWhere('description', 'like' ,'%'.$request->search.'%')->get();

        return view('admin.manageProducts.search', compact('products'));

    }

    public function editProductCategory(Request $request, $c)
    {

        $request->validate([
            'name'=>'required|string'
        ]);

        $cat = Category::find($c);
        $cat->name= $request->name;
        $cat->save();
        Alert::success('Success', 'Category Edited Successfully');
        return back();
    }

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
        // $ext = $request->video->getClientOriginalExtension();
        // $rand = \Str::random(3);
        // $videoName= \Str::slug($request->name).$rand.time().'.'.$ext;
        // $request->video->move(public_path('assets/ProductVideo'), $videoName);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id =$request->category_id;
        $product->price =$request->price;
        $product->quantity =$request->quantity;
        $product->status =$request->status;
        $product->description =$request->description;
        $product->image =implode('|', $image);
        // $product->video = $videoName;
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

        $products = Product::latest()->paginate(4);
        return view('admin.manageProducts.allproducts', compact('products'));

    }

    public function allOrders()
    {

        $paid = Purchase::with('product')->latest()->paginate(10);
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
