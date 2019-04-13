<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>
<?php $tab = 2 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/states.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>New User</h3>
      </div>
    </div>
    <br><br>
    <br><br>
    <form action="" method="post">
      <div class="card bg-light">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control">
              </div>
            </div>
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
          <div class="form-group">
            <label>Mailing Address</label>
            <textarea rows="3" class="form-control"></textarea>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>State</label>
                <?= states_select() ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>ZIP Code</label>
                <input type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Daytime Phone Number</label>
            <input type="number" class="form-control">
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

      <div class="card bg-light">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>User Type</label>
                <select class="form-control">
                  <option value="hr">Human Resources</option>
                  <option value="it">Technology</option>
                  <option value="pay">Payroll</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Account Status</label>
                <select class="form-control">
                  <option value="active">Active</option>
                  <option value="active">Suspended</option>
                </select>
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

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>