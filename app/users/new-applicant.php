<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/states.php"; ?>

<div class="container" id="main">
  <div class="row justify-content-md-center">
    <div class="col col-md-10">
      <div class="text-center">
        <img src="//placehold.it/600x200?text=Logo" class="img-fluid" alt="Responsive image">
      </div>
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
                  <label>Choose A Password</label>
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
          <small>By submitting this form, you are agreeing to our <a href="">privacy policy</a> and <a href="">terms &amp; conditions</a>.</small>
          <br><br>
          <button class="btn btn-primary">Create My Account</button>
        </div>            
      </form>

    </div>
  </div>
</div>


<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>