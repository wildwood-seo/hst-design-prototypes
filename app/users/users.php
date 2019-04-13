<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 2 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Users</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a href="new-user.php" class="btn btn-success"><i class="fas fa-plus"></i> New User</a>
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
            <th scope="col">User Type</th>
            <th scope="col">Last Login IP</th>
            <th scope="col">Last Login At</th>
            <th scope="col" class="text-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Kelli Shaver</td>
            <td>Human Resources</td>
            <td>24.26.45.68</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
              <a href="new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
            </td>
          </tr>
          <tr>
            <td>Kathleen Istudor</td>
            <td>Human Resources</td>
            <td>24.26.45.68</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
              <a href="new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
            </td>
          </tr>
          <tr>
            <td>Daffy Duck</td>
            <td>Technology</td>
            <td>24.26.45.68</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
              <a href="new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
            </td>
          </tr>
          <tr>
            <td>Bugs Bunny</td>
            <td>Payroll</td>
            <td>24.26.45.68</td>
            <td><?= date(DATE_RFC2822) ?></td>
            <td class="text-right">
              <a href="user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i> View</a>
              <a href="new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>