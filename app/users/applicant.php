<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 2; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<div id="app">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Kelli Shaver</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a href="new-user.php" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
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
      <div class="col-md-2 tour-one">
        <a href="" class="btn btn-link btn-block">
          <i class="fas fa-file-archive fa-2x"></i><br>
          Download All Files
        </a>
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
        <a href="" class="btn btn-link btn-block">
          <i class="fas fa-file-archive fa-2x"></i><br>
          Download All Files
        </a>
        <a href="/app/checklists/show.php" class="btn btn-outline-info btn-block">View Checklist</a>
      </div>
      <div class="col-md-8">
        <h5>Technology Training</h5>
        <div class="progress tour-two">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        Complete!
      </div>
      <div class="col-md-2 text-center">
        <i class="fas fa-trophy fa-3x text-warning tour-three"></i>
      </div>
    </div>
    <br><hr><br>

    <div class="row">
      <div class="col-md-2">
        <a href="" class="btn btn-link btn-block">
          <i class="fas fa-file-archive fa-2x"></i><br>
          Download All Files
        </a>
        <a href="/app/checklists/show.php" class="btn btn-outline-info btn-block">View Checklist</a>
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
        <a href="" class="btn btn-link btn-block">
          <i class="fas fa-file-archive fa-2x"></i><br>
          Download All Files
        </a>
        <a href="/app/checklists/show.php" class="btn btn-outline-info btn-block">View Checklist</a>
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


<ol id="tour" style="display: none;">
  <li data-target=".tour-one" data-angle="130">
    View / Download links may not be visible for all checklists, depending on user type.
  </li>
  <li data-target=".tour-two" data-angle="130">
    Progress bars are color-coded and show what percentage of the checklist is complete.
  </li>
  <li data-target=".tour-three" data-angle="130">
    Completed checklists earns a gold trophy.
  </li>
</ol>


<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>