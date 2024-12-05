<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Post::all();
        return view('public.blog',compact('blogs'));
    }

    public function getBlogs(){
        $posts = Post::all();
        return view('dashboard.blog.blog',compact('posts'));
    }

    public function blogForm(){
        return view('dashboard.blog.blog-form');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // Allow up to 10MB
    ]);
    
    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;

    if ($request->hasFile('featured_image')) {
        $destinationPath = public_path('uploads');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
        }
        $fileName = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
    
        $request->file('featured_image')->move($destinationPath, $fileName);
        $post->featured_image = 'uploads/' . $fileName;
    }

    $post->save();

    return redirect()->route('blogs')->with('success', 'Post created successfully!');
}

}


