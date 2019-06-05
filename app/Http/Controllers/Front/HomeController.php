<?php

namespace App\Http\Controllers\Front;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::take(3)->get();
        return view('front.home.index',compact('blogs'));
    }
}
