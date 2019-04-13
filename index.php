<?php require "./includes/header.php"; ?>
  <div class="container" id="main">
    <h1>Head Start Onboarding Application<br>
      <span class="text-muted">Design Prototypes</span>
    </h1>
    <hr>

    <ul class="list-group">
      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Overall Styles</strong></li>

      <li class="list-group-item d-flex justify-content-between align-items-center">
        Bootstrap Styles
        <a href="bootstrap.php" class="btn btn-sm btn-primary">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Authentication / Account Recovery</strong></li>

      <li class="list-group-item d-flex justify-content-between align-items-center">
        Login
        <a href="app/auth/login.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Forgot Password
        <a href="app/auth/forgot-password.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Password Reset
        <a href="app/auth/password-reset.php" class="btn btn-sm btn-primary">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Users / Admins</strong></li>

      <li class="list-group-item d-flex justify-content-between align-items-center">
        Admin User
        <a href="app/users/admin.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        HR/IT User
        <a href="app/users/user.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        New HR/IT User
        <a href="app/users/new-user.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Applicant
        <a href="app/users/applicant.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        New Applicant
        <a href="app/users/new-applicant.php" class="btn btn-sm btn-primary">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Organizations</strong></li>

      <li class="list-group-item d-flex justify-content-between align-items-center">
        List Organizations
        <a href="app/organizations/index.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        View Organization
        <a href="app/organizations/show.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        New Organization
        <a href="app/organizations/new.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Edit Organization
        <a href="app/organizations/new.php" class="btn btn-sm btn-primary">Show</a>
      </li>
    </ul>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Checklist Templates</strong></li>

      <li class="list-group-item d-flex justify-content-between align-items-center">
        List Templates
        <a href="app/checklist-templates/index.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        View Template
        <a href="app/checklist-templates/show.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        New Template
        <a href="app/checklist-templates/new.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Edit Template
        <a href="app/checklist-templates/edit.php" class="btn btn-sm btn-primary">Show</a>
      </li>

      <li class="bg-light list-group-item d-flex justify-content-between align-items-center"><strong>Checklists</strong></li>

      <li class="list-group-item d-flex justify-content-between align-items-center">
        List Checklists
        <a href="app/checklists/index.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        View Checklist - HR/IT User
        <a href="app/checklists/show-user.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        View Checklist - Applicant
        <a href="app/checklists/show-applicant.php" class="btn btn-sm btn-primary">Show</a>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Edit Checklist
        <a href="app/checklist-templates/edit.php" class="btn btn-sm btn-primary">Show</a>
      </li>
    </ul>

  </div>
<?php $hide_pw = true; ?>
<?php require "./includes/footer.php"; ?>