<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('public.portfolio',compact('portfolios'));
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
        // Validate and retrieve the validated input data
        $validatedData = $request->validated();
    
        // Handle the project image upload
        if ($request->hasFile('project_image')) {
            // Store the uploaded image in the 'portfolio_images' directory in the 'public' disk
            $imagePath = $request->file('project_image')->store('portfolio_images', 'public');
            $validatedData['project_image'] = $imagePath;
        }
    
        // Create the project in the database with the validated data
        $project = Portfolio::create($validatedData);
    
        // Redirect to the portfolios route with success message
        return redirect()->route('portfolios')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('dashboard.portfolio.portfolio-show', compact('portfolio'));
    }
    public function update(StoreProjectRequest $request, $id)
    {
        // Get the validated data from the request
        $validatedData = $request->validated();
    
        // Find the portfolio record
        $portfolio = Portfolio::findOrFail($id);
    
        // Handle the project image upload if it exists
        if ($request->hasFile('project_image')) {
            $validatedData['project_image'] = $request->file('project_image')->store('portfolio_images', 'public');
        }
    
        // Update the portfolio record
        $portfolio->update($validatedData);
    
        return redirect()->route('portfolios')->with('success', 'Portfolio updated successfully');
    }


    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $portfolio->delete();

        return redirect()->route('portfolios')->with('success', 'Portfolio deleted successfully');
    }

    public function show($id)
{
    $portfolio = Portfolio::findOrFail($id);

    return view('public.portfolio-single', compact('portfolio'));
}


}


