<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 1 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Applicants</h3>
      </div>
    </div>
    <br><br>
    <br><br>
    <div class="row">
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Progress</th>
            <th scope="col">Created At</th>
            <th scope="col">Last Login At</th>
            <th scope="col" class="text-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Kelli Shaver</td>
            <td><span class="badge badge-success">100%</span></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="applicant.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
          <tr>
            <td>Kelli Shaver</td>
            <td><span class="badge badge-info">60%</span></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="applicant.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
          <tr>
            <td>Kelli Shaver</td>
            <td><span class="badge badge-warning">30%</span></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="applicant.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
          <tr>
            <td>Kelli Shaver</td>
            <td><span class="badge badge-danger">10%</span></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="applicant.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>