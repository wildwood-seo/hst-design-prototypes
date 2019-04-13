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
        <strong>User Type:</strong> Human Resources<br>
        <strong>Last Login:</strong> 24.26.45.68 on <?= date(DATE_RFC2822) ?><br>
        <br>
        <span class="badge badge-success">active</span>
      </div>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>