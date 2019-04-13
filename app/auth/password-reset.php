<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-md-6">

      <div id="login">
        <img src="//placehold.it/800x200?text=Logo" class="img-fluid" alt="Responsive image">

        <div class="card">
          <div class="card-header bg-primary text-white">Reset Your Password</div>
          <div class="card-body">

            <form action="" method="post">

              <p>Enter a new password below to finish resetting your password.</p>

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>

              <div class="form-group">
                <label>Re-type Password</label>
                <input type="password" class="form-control">
              </div>

              <br>
              <div class="form-group">
                <button class="btn btn-primary float-right">Reset Password</button>
              </div>            
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>