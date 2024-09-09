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
        $portfolios = Portfolio::all();
        return view('dashboard.portfolio.portfolio', compact('portfolios'));
    }

    public function formPage(){
        return view('dashboard.portfolio.portfolio-form');
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Portfolio::create($request->validated());
        return redirect()->route('portfolios')
                         ->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('dashboard.portfolio.portfolio-show', compact('portfolio'));
    }
    public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'client_name' => 'required|string|max:255',
        'industry' => 'required|string|max:255',
        'website' => 'nullable|url',
        'client_description' => 'nullable|string',
        'project_requirements' => 'nullable|string',
        'project_overview' => 'nullable|string',
        'solution' => 'nullable|string',
        'client_satisfaction' => 'required|string',
        'time_needed' => 'nullable|string|max:255',
        'status' => 'nullable|boolean',
    ]);

    $portfolio = Portfolio::findOrFail($id);

    $portfolio->update($request->all());

    return redirect()->route('portfolios')->with('success', 'Portfolio updated successfully');
}


    public function destroy($id)
    {
        // Find the portfolio by its ID or fail
        $portfolio = Portfolio::findOrFail($id);

        // Delete the portfolio
        $portfolio->delete();

        // Redirect to the portfolio list page with a success message
        return redirect()->route('portfolios')->with('success', 'Portfolio deleted successfully');
    }

}


