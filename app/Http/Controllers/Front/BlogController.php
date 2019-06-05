<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show(Blog $blog)
    {
     
        return view('front.blog.show', compact('blog'));

    }

    public function blogPost()
    {
        return view('front.blog.blogpost');
    }

}
