<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function resume(){
        return view('public.resume');
    }

    public function contact(){
        return view('public.contact');
    }
}
