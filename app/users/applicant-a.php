<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 3; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/applicant-navbar.php"; ?>
<div id="app">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Kelli Shaver</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a href="new-user.php" class="btn btn-info"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp; Edit Profile</a>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        kelli@kellishaver.com<br>
        123-456-7890<br><Br>

        <p>
          123 Hometown St.<br>
          Sunnyville, CA 12345
        </p>
      </div>
      <div class="col-md-6">
        <strong>Onboarding Status:</strong><br>
        Complete 2 of 5 Checklists
      </div>
    </div>

    <hr>
    <br>

    <div class="row">
      <div class="col-md-2">
        <a href="/app/checklists/show.php" class="btn btn-outline-info btn-block">View Checklist</a>
      </div>
      <div class="col-md-8">
        <h5>Policies &amp; Procedures</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        Complete!
      </div>
      <div class="col-md-2 text-center">
        <i class="fas fa-trophy fa-3x text-warning"></i>
      </div>
    </div>
    <br><hr><br>

    <div class="row">
      <div class="col-md-2">
        <a href="/app/checklists/show.php" class="btn btn-outline-info btn-block">View Checklist</a>
      </div>
      <div class="col-md-8">
        <h5>Technology Training</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        Complete!
      </div>
      <div class="col-md-2 text-center">
        <i class="fas fa-trophy fa-3x text-warning"></i>
      </div>
    </div>
    <br><hr><br>

    <div class="row">
      <div class="col-md-2">
        <a href="/app/checklists/show.php" class="btn btn-info btn-block">Continue</a>
      </div>
      <div class="col-md-8">
        <h5>Background Information</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        Completed 6 of 10 questions...
      </div>
      <div class="col-md-2 text-center">
        <i class="fas fa-trophy fa-3x text-light"></i>
      </div>
    </div>
    <br><hr><br>

    <div class="row">
      <div class="col-md-2">
        <a href="/app/checklists/show.php" class="btn btn-info btn-block">Continue</a>
      </div>
      <div class="col-md-8">
        <h5>Important Documents</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        Completed 1 of 5 questions...
      </div>
      <div class="col-md-2 text-center">
        <i class="fas fa-trophy fa-3x text-light"></i>
      </div>
    </div>

  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>