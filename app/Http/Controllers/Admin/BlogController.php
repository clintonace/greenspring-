<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function addBlogView()
    {

        $cats = Blogcategory::all();
        $products = Product::all();
        $tags = Tag::all();

        return view('admin.manageBlog.addBlog', compact('cats', 'products', 'tags'));

    }

    public function addBlog(Request $request)
    {

        $request->validate([
            'title'=> ['required', 'string'],
            'tags.*'=> ['required', 'string'],
            'blog'=> ['required', 'string'],
            'image.*'=> ['required', 'mimes:png,jpeg,jpg'],
        ]);

        $image =[];
        $tags =[];
        foreach ($request->tags as $t) {
            $tags[]= $t;
        }

        if ($request->has('image')) {

            $ext = $request->image->getClientOriginalExtension();
            $rand = \Str::random(2);
            $imageName = \Str::slug($request->title).$rand.'.'.$ext;
            $request->image->move(public_path('/assets/BlogImages'), $imageName);
            $image[] = $imageName;
        }


        $blog = new Blog();
        $blog->title = $request->title;
        $blog->tag = implode('|', $tags);
        $blog->image= implode('|', $image);
        $blog->blog = $request->blog;
        $blog->product_id = $request->product_id;
        $blog->blogcategory_id = $request->category_id;
        $blog->slug = \Str::slug($request->title);
        $blog->save();
        Alert::success('Success', 'Blog added Successfully.');

        return back();
    }

    public function addComment(Request $request, $b)
    {

        $request->validate([
            'comment'=>'required|max:100',
            'email'=>'required|email',
        ]);

        $comment = new Comment();
        $comment->blog_id = $b;
        $comment->comment = $request->comment;
        $comment->email = $request->email;
        $comment->save();
        Alert::success('Success', 'Comment Added Successfully.');
        return back();

    }

    public function addBlogToolsView()
    {
        $cats = Blogcategory::all();
        $tags = Tag::all();
        return view('admin.manageBlog.addBlogTools', compact('cats', 'tags'));
    }

    public function addBlogTag(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:50',
        ]);


         $tag = new Tag();
         $tag->name = $request->name;
         $tag->save();

         Alert::success('Success', 'Tag Added Successfully.');

        return back();
    }

    public function addBlogCategory(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:50',
        ]);


         $category = new Blogcategory();
         $category->name = $request->name;
         $category->save();

         Alert::success('Success', 'Category Added Successfully.');

        return back();
    }

}
