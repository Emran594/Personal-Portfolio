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

public function show($id)
{
    $blog = Post::findOrFail($id);
    $wordCount = str_word_count(strip_tags($blog->description));
    $readingTime = ceil($wordCount / 200);
    $previousBlog = Post::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
    $nextBlog = Post::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();

    return view('public.blog-single', compact('blog','readingTime','previousBlog','nextBlog'));
}
public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('dashboard.blog.blog-show', compact('post'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Allow up to 10MB
    ]);

    $post = Post::findOrFail($id);

    $post->title = $request->title;
    $post->description = $request->description;

    // Handle Image Upload
    if ($request->hasFile('featured_image')) {
        // Delete old image if exists
        if ($post->featured_image && file_exists(public_path($post->featured_image))) {
            unlink(public_path($post->featured_image));
        }

        // Upload new image
        $destinationPath = public_path('uploads');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
        }
        $fileName = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
        $request->file('featured_image')->move($destinationPath, $fileName);

        $post->featured_image = 'uploads/' . $fileName;
    }

    $post->save();

    return redirect()->route('blogs')->with('success', 'Post updated successfully!');
}

public function destroy($id)
{
    $post = Post::findOrFail($id);

    // Delete image from the directory if exists
    if ($post->featured_image && file_exists(public_path($post->featured_image))) {
        unlink(public_path($post->featured_image));
    }

    $post->delete();

    return redirect()->route('blogs')->with('success', 'Post deleted successfully!');
}


}


