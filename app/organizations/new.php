<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 1; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/states.php"; ?>
<div id="app">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>New Organization</h3>
      </div>
    </div>
    <br><br>
    <form action="" method="post">
      <div class="card bg-light">
        <div class="card-body">
          <div class="form-group">
            <label>Organization Name</label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <br>
      <div class="card bg-light">
        <div class="card-body">
          <div class="form-group">
            <label>Mailing Address</label>
            <textarea rows="3" class="form-control"></textarea>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>State</label>
                <?= states_select() ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>ZIP Code</label>
                <input type="number" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card bg-light">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Primary Contact Name</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Primary Contact Email</label>
                <input type="email" class="form-control">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Primary Contact Phone</label>
                <input type="number" class="form-control">
              </div>
            </div>
          </div>        
        </div>
      </div>
      <br>
      <div class="card bg-light">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Status</label>
                <select class="form-control">
                  <option value="active">Active</option>
                  <option value="active">Canceled</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group text-center">
            <a href="index.php" class="btn btn-link">Cancel</a>
            <button class="btn btn-primary">Save Changes</button>
          </div>            
        </div>
      </div>
    </form>

  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>