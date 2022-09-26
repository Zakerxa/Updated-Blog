<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {

        return view('home', [
            'blogs' => Blog::latest('created_date')->filter(request(['search','categories']))->paginate(6),
            'populars' => Blog::orderByRaw('CONVERT(views, SIGNED) desc')->take(3)->get()
        ]);
    }

    function show(Blog $blog)
    {
        return view('components/single-blog', [
            'blog' => $blog,
            'relatives' =>  Category::where('slug', $blog->category->name)->first()->blog->take(3)
        ]);
    }

    function store(Blog $blog){

    }
}
