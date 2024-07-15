<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('public.portfolio');
    }

    public function getPortfolio(){
        return view('dashboard.portfolio.portfolio');
    }
}
