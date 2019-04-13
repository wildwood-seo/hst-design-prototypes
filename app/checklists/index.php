<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 0 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Checklists</h3>
      </div>
      <div class="col-md-6">
        <a class="btn btn-success float-right"><i class="fa fa-plus"></i> New Checklist</a>
      </div>
    </div>
    <br><br>
    <br><br>
    <div class="row">
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">No. of Questions</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col" class="text-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Policies &amp; Proceedures</td>
            <td>10</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
          <tr>
            <td>Technology Training</td>
            <td>14</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
          <tr>
            <td>Background Information</td>
            <td>12</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
          <tr>
            <td>Important Documents</td>
            <td>11</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>