<?php require "./includes/header.php"; ?>
  <div class="container" id="main">
    <h1>Head Start Onboarding Application<br>
      <span class="text-muted"><small>Design Prototypes</small></span>
    </h1>
    <hr>

    <h5 class="bg-dark text-white list-heading">Global</h5>
    <ul class="list-group">
      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Overall Styles</strong></li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Bootstrap Styles
        <a href="bootstrap.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
    </ul>

    <h5 class="bg-dark text-white list-heading">Admin Interface</h5>
    <ul class="list-group">
      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Admins</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Admin Users
        <a href="app/users/admins.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Show Admin User
        <a href="app/users/admin.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; New / Edit Admin User
        <a href="app/users/new-admin.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Organizations</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; List Organizations
        <a href="app/organizations/index.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; View Organization
        <a href="app/organizations/show.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; New / Edit Organization
        <a href="app/organizations/new.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Checklist Templates</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; List Templates
        <a href="app/checklist-templates/index.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp; View Template
        <a href="app/checklist-templates/show.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp; New / Edit Template
        <a href="app/checklist-templates/new.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
    </ul>


    <h5 class="bg-dark text-white list-heading">Application Interface</h5>
    <ul class="list-group">
      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Authentication</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Login
        <a href="app/auth/login.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Forgot Password
        <a href="app/auth/forgot-password.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Password Reset
        <a href="app/auth/password-reset.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Users</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; List HR/IT Users
        <a href="app/users/users.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; View HR/IT User
        <a href="app/users/user.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; New / Edit HR/IT User
        <a href="app/users/new-user.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; List Applicants
        <a href="app/users/applicants.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; View Applicant - As HR / Tech / Payroll User
        <a href="app/users/applicant.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;View Applicant - As Applicant
        <a href="app/users/applicant-a.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp; New / Edit Applicant
        <a href="app/users/new-applicant.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Organization</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; Dashboard
        <a href="app/organizations/dashboard.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Checklists</strong></li>

      <li class="list-group-item">
        <i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp; List Checklists
        <a href="app/checklists/index.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp; View Checklist - HR/IT User
        <a href="app/checklists/show-user.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp; View Checklist - Applicant
        <a href="app/checklists/show-applicant.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp; Edit Checklist
        <a href="app/checklist-templates/edit.php" class="btn btn-sm btn-primary float-right">Show</a>
      </li>
    </ul>

  </div>
<?php $hide_pw = true; ?>
<?php require "./includes/footer.php"; ?>