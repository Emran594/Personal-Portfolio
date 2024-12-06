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

    $validatedData = $request->validated();


    if ($request->hasFile('project_image')) {
        $destinationPath = public_path('uploads');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
        }
        $imageName = time() . '.' . $request->file('project_image')->getClientOriginalExtension();
        $request->file('project_image')->move($destinationPath, $imageName);
        $validatedData['project_image'] = 'uploads/' . $imageName;
    }

    try {
        $project = Portfolio::create($validatedData);
    } catch (\Exception $e) {
        // Debug the error if the save fails
        dd($e->getMessage());
    }

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
    // Find the project by ID
    $project = Portfolio::findOrFail($id);

    // Validate and retrieve the validated input data
    $validatedData = $request->validated();

    // Handle the project image upload
    if ($request->hasFile('project_image')) {
        // Define the destination path
        $destinationPath = public_path('uploads');

        // Ensure the destination directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
        }

        $imageName = time() . '.' . $request->file('project_image')->getClientOriginalExtension();

        // Move the uploaded file to the destination path
        $request->file('project_image')->move($destinationPath, $imageName);

        // Delete the old image if it exists
        if ($project->project_image && file_exists(public_path($project->project_image))) {
            unlink(public_path($project->project_image));
        }

        // Update the validated data with the new image path
        $validatedData['project_image'] = 'uploads/' . $imageName;
    }

    // Update the project in the database
    try {
        $project->update($validatedData);
    } catch (\Exception $e) {
        // Debug the error if the update fails
        return redirect()->back()->withErrors(['error' => 'Failed to update the project: ' . $e->getMessage()]);
    }

    // Redirect to the portfolios route with success message
    return redirect()->route('portfolios')->with('success', 'Project updated successfully.');
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


