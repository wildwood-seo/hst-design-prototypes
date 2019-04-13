<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 7; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>

<div id="app">
  <div class="container dashboard">
    <div class="row">
      <div class="col-md-6">
        <h3>Sunnyville Head Start</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a class="btn btn-info" href="new.php"><i class="fas fa-pencil-alt"></i> Edit</a>
        </span>
      </div>
    </div>
    <br><br>

    <div class="row">
      <div class="col-md-6">
        <div class="card bg-light">
          <div class="card-header">New Applicants This Week</div>
          <div class="card-body">
            <p class="big-number">3</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-light">
          <div class="card-header">Applications Completed This Week</div>
          <div class="card-body">
            <p class="big-number">4</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-light">
          <div class="card-header">Total Applicants</div>
          <div class="card-body">
            <p class="big-number">23</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-light">
          <div class="card-header">Application Completion Rate</div>
          <div class="card-body">
            <p class="big-number">86%</p>
          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="card bg-light">
          <div class="card-header">Recent Applications</div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-circle text-info tour-one"></i>
                <a href="/app/users/applicant.php">Kelli Shaver</a><br>
                <small>Created: Apr. 12, 2019 - Completed 3 of 5 Checklists</small>
              </li>

              <li class="list-group-item">
                <i class="fa fa-circle text-danger"></i>
                <a href="/app/users/applicant.php">Kelli Shaver</a><br>
                <small>Created: Apr. 12, 2019 - Completed 0 of 5 Checklists</small>
              </li>

              <li class="list-group-item">
                <i class="fa fa-circle text-warning"></i>
                <a href="/app/users/applicant.php">Kelli Shaver</a><br>
                <small>Created: Apr. 12, 2019 - Completed 1 of 5 Checklists</small>
              </li>

              <li class="list-group-item">
                <i class="fa fa-circle text-success"></i>
                <a href="/app/users/applicant.php">Kelli Shaver</a><br>
                <small>Created: Apr. 12, 2019 - Completed 5 of 5 Checklists</small>
              </li>

          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<ol id="tour" style="display: none;">
  <li data-target=".tour-one" data-angle="130">
    Status icons indicate rough progress through all checklists at logical breakpoints
  </li>
</ol>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>