<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-md-6">

      <div id="login">
        <img src="//placehold.it/800x200?text=Logo" class="img-fluid" alt="Responsive image">

        <div class="card">
          <div class="card-header bg-primary text-white">Please Log In</div>
          <div class="card-body">

            <form action="" method="post">
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="you@example.com">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="">
                <label class="form-check-label">
                  Remember Me
                </label>
              </div>
              <br>
              <div class="form-group">
                <button class="btn btn-primary float-right">Log In</button>
              </div>            
              <br><br>
              <a href="forgot-password.php">Forgot Password</a>
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>