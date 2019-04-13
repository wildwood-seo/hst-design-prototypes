<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-md-6">

      <div id="login">
        <img src="//placehold.it/800x200?text=Logo" class="img-fluid" alt="Responsive image">

        <div class="card">
          <div class="card-header bg-primary text-white">Forgot Your Password?</div>
          <div class="card-body">

            <form action="password-reset.php" method="post">
              <p>Please enter your email address below to reset your password.</p>

              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="you@example.com">
              </div>
              <br>
              <div class="form-group">
                <button class="btn btn-primary float-right">Continue</button>
              </div>            
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>