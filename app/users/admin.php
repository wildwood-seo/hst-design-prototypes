<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 3; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Kelli Shaver</h3>
        kelli@kellishaver.com
        <br>
        <span class="badge badge-success">admin</span>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a href="new-admin.php" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
        </span>
      </div>
    </div>
    <br><br>
    <br><br>
    <div class="row">
      <h5>Login History</h5>
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">IP Address</th>
            <th scope="col">Date &amp; Time</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
          <tr><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td></tr>
        </tbody>
      </table>
      <a href="" class="btn btn-outline-info">Clear Login History</a>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>