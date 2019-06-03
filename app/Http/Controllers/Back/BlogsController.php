<?php

namespace App\Http\Controllers\Back;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();

        return view('back.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('back.blogs.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->published_by = \Auth::user()->id;
        
        if(isset($request->thumbnail)){
            $img = Image::make($request->thumbnail);
            $ext = $request->thumbnail->extension();
            $filename = 'img_'.date('sdHmYl').'_'.rand(1000, 9000).'.'.$ext;

            $img->resize(1000,1000, function ($constraints) {
                $constraints->aspectRatio();
                $constraints->upsize();
            })->save('public/img/'.$filename);

            $blog->thumbnail = $filename;
        }
       

        $blog->save();

        return redirect()->route('blogs.index');

    }

    public function edit(Blog $blog)
    {
        return view('back.blogs.edit', compact('blog'));
    }
    
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->published_by = \Auth::user()->id;

        if(isset($request->thumbnail)){
            $img = Image::make($request->thumbnail);
            $ext = $request->thumbnail->extension();
            $filename = 'img_'.date('Y M d (l)').'_'.rand(1000, 9000).'.'.$ext;

            $img->resize(1000,1000, function ($constraints) {
                $constraints->aspectRatio();
                $constraints->upsize();
            })->save('public/img/'.$filename);

            if(!empty($blog->thumbnail)) {
                @unlink('public/img/'.$blog->thumbnail);
            }

            $blog->thumbnail = $filename;
            
        }
        $blog->save();

        return redirect()->route('blogs.index');
    }

    public function toggleStatus(Blog $blog){
        if($blog->update(['published'=>!$blog->published])){
            return redirect()->route('blogs.index');
        }
    }
}
