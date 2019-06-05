<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function about()
    {
        return view('front.about');
    }

    public function faq()
    {
        return view('front.faq');
    }
}
