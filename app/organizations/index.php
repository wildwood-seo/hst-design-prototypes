<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 1 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Organization</h3>
      </div>
      <div class="col-md-6">
        <span class="float-right">
          <a href="new.php" class="btn btn-success"><i class="fas fa-plus"></i> New Organization</a>
        </span>
      </div>
    </div>
    <br><br>
    <br><br>
    <div class="row">
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">OrganizationName</th>
            <th scope="col">Contact Person</th>
            <th scope="col">Contact Phone</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Sunnyville Head Start</td>
            <td>Jane Doe</td>
            <td>123-456-7890</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm">View</a>
              <a href="new.php" class="btn btn-info btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          <tr>
            <td>Sunnyville Head Start</td>
            <td>Jane Doe</td>
            <td>123-456-7890</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm">View</a>
              <a href="new.php" class="btn btn-info btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          <tr>
            <td>Sunnyville Head Start</td>
            <td>Jane Doe</td>
            <td>123-456-7890</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm">View</a>
              <a href="new.php" class="btn btn-info btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          <tr>
            <td>Sunnyville Head Start</td>
            <td>Jane Doe</td>
            <td>123-456-7890</td>
            <td><span class="badge badge-danger">Canceled</span></td>
            <td class="text-right">
              <a href="show.php" class="btn btn-outline-info btn-sm">View</a>
              <a href="new.php" class="btn btn-info btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>