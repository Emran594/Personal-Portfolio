<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-12xl">
                    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="projectTitle">Project Title</label>
                            <input type="text" class="form-control" id="projectTitle" name="title" value="{{ $portfolio->title }}" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="projectDescription">Project Description</label>
                            <textarea class="form-control" id="projectDescription" name="description" rows="3">{{ $portfolio->description }}</textarea>
                        </div>
                    
                        <div class="form-group">
                            <label for="clientName">Client Name</label>
                            <input type="text" class="form-control" id="clientName" name="client_name" value="{{ $portfolio->client_name }}" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="clientIndustry">Industry</label>
                            <input type="text" class="form-control" id="clientIndustry" name="industry" value="{{ $portfolio->industry }}" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="clientWebsite">Website</label>
                            <input type="url" class="form-control" id="clientWebsite" name="website" value="{{ $portfolio->website }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="clientDescription">Client Description</label>
                            <textarea class="form-control" id="clientDescription" name="client_description" rows="3">{{ $portfolio->client_description }}</textarea>
                        </div>
                    
                        <div class="form-group">
                            <label for="projectRequirements">Project Requirements</label>
                            <textarea class="form-control" id="projectRequirements" name="project_requirements" rows="3">{{ $portfolio->project_requirements }}</textarea>
                        </div>
                    
                        <div class="form-group">
                            <label for="projectOverview">Project Overview</label>
                            <textarea class="form-control" id="projectOverview" name="project_overview" rows="3">{{ $portfolio->project_overview }}</textarea>
                        </div>
                    
                        <div class="form-group">
                            <label for="projectSolution">Solution</label>
                            <textarea class="form-control" id="projectSolution" name="solution" rows="3">{{ $portfolio->solution }}</textarea>
                        </div>
                    
                        <div class="form-group">
                            <label>Client Satisfaction</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="client_satisfaction" id="satisfied" value="Satisfied" {{ $portfolio->client_satisfaction == 'Satisfied' ? 'checked' : '' }}>
                                <label class="form-check-label" for="satisfied">Satisfied</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="client_satisfaction" id="neutral" value="Neutral" {{ $portfolio->client_satisfaction == 'Neutral' ? 'checked' : '' }}>
                                <label class="form-check-label" for="neutral">Neutral</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="client_satisfaction" id="dissatisfied" value="Dissatisfied" {{ $portfolio->client_satisfaction == 'Dissatisfied' ? 'checked' : '' }}>
                                <label class="form-check-label" for="dissatisfied">Dissatisfied</label>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="timeNeeded">Estimated Time Needed</label>
                            <input type="text" class="form-control" id="timeNeeded" name="time_needed" value="{{ $portfolio->time_needed }}">
                        </div>
                        <div class="form-group">
                            <label for="projectImage">Project Feature Image</label>
                            <input type="file" class="form-control" id="projectImage" name="project_image">
                        </div>
                    
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status" value="1" id="isActive" {{ $portfolio->status ? 'checked' : '' }}>
                            <label class="form-check-label" for="isActive">Project Active</label>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Update Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
