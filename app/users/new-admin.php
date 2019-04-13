<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>
<?php $tab = 0 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3 class="tour-one">New System Admin</h3>
      </div>
    </div>
    <br><br>
    <br><br>
    <form action="" method="post">
      <div class="card bg-light">
        <div class="card-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control">
          </div>
        </div>
      </div>
      <br>
      <div class="card bg-light">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
                <a href="">show password</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Re-type Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>

      <div class="form-group text-center">
        <a href="admins.php" class="btn btn-link">Cancel</a>
        <button class="btn btn-primary">Save Changes</button>
      </div>            

    </div>
  </div>
</div>

<ol id="tour" style="display: none;">
  <li data-target=".tour-one" data-angle="130">
    Headings and button text change for new record vs. editing existing record
  </li>
</ol>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>