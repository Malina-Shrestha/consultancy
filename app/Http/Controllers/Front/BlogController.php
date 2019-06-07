<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show()
    {
        $blogs = Blog::where('published',true)->orderBy('id','DESC')->get();
        $recentBlogs = Blog::where('published',true)->orderBy('id','DESC')->take(3)->get();
        return view('front.blog.show', compact('blogs','recentBlogs'));

    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $recentBlogs = Blog::where('published',true)->orderBy('id','DESC')->take(3)->get();
        return view('front.blog.detail', compact('blog','recentBlogs'));
    }

}
