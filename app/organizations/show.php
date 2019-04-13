<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 1; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>

<div id="app">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Sunnyville Head Start</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a class="btn btn-info" href="new.php"><i class="fas fa-pencil-alt"></i> Edit</a>
          <a class="btn btn-primary" href="dashboard.php"><i class="fas fa-tools"></i> Manage Organization</a>
        </span>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-md-6">
        <p>
          123 Sunnyville Lane<br>
          Sunnyville, CA 12345
        </p>
        <strong>Primary Contact:</strong><br>
        Jane Doe<br>
        jane@sunnyvillehs.schools.us<br>
        123-456-7890
      </div>
      <div class="col-md-6">
        <strong>Account Status:</strong> <span class="badge badge-success">active</span><br>
        <strong>Created On:</strong> January 1, 2020<br>
        <strong>Renewal Date:</strong> January 1, 2021<br>
        <br>
        <strong>Total Appllicants:</strong> 23
      </div>
    </div>
    <hr>
    <br><br>
    <h5>
      Users In This Organization:
      <span class="text-muted">(excluding applicants)</span>
    </h5>
    <br>
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
            <a href="/app/users/user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i></a>
            <a href="/app/users/new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr>
          <td>Kathleen Istudor</td>
          <td>Human Resources</td>
          <td>24.26.45.68</td>
          <td><?= date(DATE_RFC2822) ?></td>
          <td class="text-right">
            <a href="/app/users/user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i></a>
            <a href="/app/users/new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr>
          <td>Daffy Duck</td>
          <td>Technology</td>
          <td>24.26.45.68</td>
          <td><?= date(DATE_RFC2822) ?></td>
          <td class="text-right">
            <a href="/app/users/user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i></a>
            <a href="/app/users/new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr>
          <td>Bugs Bunny</td>
          <td>Payroll</td>
          <td>24.26.45.68</td>
          <td><?= date(DATE_RFC2822) ?></td>
          <td class="text-right">
            <a href="/app/users/user.php" class="btn btn-outline-info btn-sm"><i class="fas fa-user"></i></a>
            <a href="/app/users/new-user.php" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
    <br><br>
    <form action="" method="post">
      <div class="card bg-light">
        <div class="card-body">
          <div class="form-group">
            <label>Notes</label>
            <textarea rows="8" class="form-control"></textarea>
          </div>
          <div class="text-center form-group">
            <button class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </form>

  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>