<?php

namespace App\Http\Controllers\Back;

use App\Blog;
use App\Admin;
use App\ContactQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        
        $admins = Admin::count();
        $blogs = Blog::count();
        $contacts = ContactQuery::count();

        return view('back.dashboard', compact('admins','blogs','contacts'));
    }
}
