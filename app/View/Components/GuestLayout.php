<?php

namespace App\View\Components;

use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $blogs = Blog::latest()->paginate(2);

        return view('layouts.guest', compact('blogs'));
    }
}
