<form action="" method="POST">
    @csrf
    <div class="form-group">
      <label for="projectTitle">Project Title</label>
      <input type="text" class="form-control" id="projectTitle" name="title" placeholder="Enter Project Title">
    </div>

    <div class="form-group">
      <label for="projectDescription">Project Description</label>
      <textarea class="form-control" id="projectDescription" name="description" rows="3" placeholder="Describe the project here"></textarea>
    </div>

    <div class="form-group">
      <label for="clientName">Client Name</label>
      <input type="text" class="form-control" id="clientName" name="client_name" placeholder="Client Name">
    </div>

    <div class="form-group">
      <label for="clientIndustry">Industry</label>
      <input type="text" class="form-control" id="clientIndustry" name="industry" placeholder="Client Industry">
    </div>

    <div class="form-group">
      <label for="clientWebsite">Website</label>
      <input type="url" class="form-control" id="clientWebsite" name="website" placeholder="Client Website (Optional)">
    </div>

    <div class="form-group">
      <label for="clientDescription">Client Description</label>
      <textarea class="form-control" id="clientDescription" name="client_description" rows="3" placeholder="Describe the client"></textarea>
    </div>

    <div class="form-group">
      <label for="projectRequirements">Project Requirements</label>
      <textarea class="form-control" id="projectRequirements" name="project_requirments" rows="3" placeholder="Outline project requirements"></textarea>
    </div>

    <div class="form-group">
      <label for="projectOverview">Project Overview</label>
      <textarea class="form-control" id="projectOverview" name="project_overview" rows="3" placeholder="Provide a project overview"></textarea>
    </div>

    <div class="form-group">
      <label for="projectSolution">Solution</label>
      <textarea class="form-control" id="projectSolution" name="solution" rows="3" placeholder="Describe the project solution"></textarea>
    </div>

    <div class="form-group">
      <label>Client Satisfaction</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="client_satisfaction" id="satisfied" value="Satisfied">
        <label class="form-check-label" for="satisfied">
          Satisfied
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="client_satisfaction" id="neutral" value="Neutral">
        <label class="form-check-label" for="neutral">
          Neutral
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="client_satisfaction" id="dissatisfied" value="Dissatisfied">
        <label class="form-check-label" for="dissatisfied">
          Dissatisfied
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for="timeNeeded">Estimated Time Needed</label>
      <input type="text" class="form-control" id="timeNeeded" name="time_needed" placeholder="Enter estimated time (e.g., 2 weeks)">
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="status" value="true" id="isActive">
      <label class="form-check-label" for="isActive">
        Project Active
      </label>
    </div>

    <button type="submit" class="btn btn-primary">Submit Project</button>
  </form>
