<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 0 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>System Admins</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a href="new-admin.php" class="btn btn-success"><i class="fas fa-plus"></i> New Admin</a>
        </span>
      </div>
    </div>
    <br><br>
    <br><br>
    <div class="row">
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Last Login IP</th>
            <th scope="col">Last Login At</th>
            <th scope="col" class="text-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Kelli Shaver</td><td>kelli@kellishaver.com</td><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td><td class="text-right"><a href="admin.php" class="btn btn-outline-info btn-sm">View</a> <a href="new-admin.php" class="btn btn-info btn-sm">Edit</a> <a href="" class="btn btn-danger btn-sm">Delete</a></td></tr>
          <tr><td>Kelli Shaver</td><td>kelli@kellishaver.com</td><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td><td class="text-right"><a href="admin.php" class="btn btn-outline-info btn-sm">View</a> <a href="new-admin.php" class="btn btn-info btn-sm">Edit</a> <a href="" class="btn btn-danger btn-sm">Delete</a></td></tr>
          <tr><td>Kelli Shaver</td><td>kelli@kellishaver.com</td><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td><td class="text-right"><a href="admin.php" class="btn btn-outline-info btn-sm">View</a> <a href="new-admin.php" class="btn btn-info btn-sm">Edit</a> <a href="" class="btn btn-danger btn-sm">Delete</a></td></tr>
          <tr><td>Kelli Shaver</td><td>kelli@kellishaver.com</td><td>24.26.45.68</td><td><?= date(DATE_RFC2822) ?></td><td class="text-right"><a href="admin.php" class="btn btn-outline-info btn-sm">View</a> <a href="new-admin.php" class="btn btn-info btn-sm">Edit</a> <a href="" class="btn btn-danger btn-sm">Delete</a></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>