<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        $portfolios = Portfolio::take(2)->get();
        $posts = Post::take(3)->get();
        return view('public.main',compact('portfolios','posts'));
    }

    public function resume(){
        return view('public.resume');
    }

    public function contact(){
        return view('public.contact');
    }
}
