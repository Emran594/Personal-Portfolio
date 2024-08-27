<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function index(){
        return view('public.portfolio');
    }

    public function getPortfolio(){
        return view('dashboard.portfolio.portfolio');
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Portfolio::create($request->validated());
        return redirect()->route('portfolios')
                         ->with('success', 'Project created successfully.');
    }

}
