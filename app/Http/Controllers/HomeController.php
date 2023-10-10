<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('home', ['posts' => $posts, 'categories' => $categories]);
    }

    public function view($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        return view('view', ['post' => $post, 'categories' => $categories]);
    }
}
