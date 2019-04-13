<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 2 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<div id="app">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Edit Checklist</h3>
      </div>
    </div>
    <form action="" method="post">
      <div class="form-group">
        <label>Checklist Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Who will have access to applicant data for this checklist?</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1"> Human Resources</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
          <label class="form-check-label" for="inlineCheckbox2"> Technology</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
          <label class="form-check-label" for="inlineCheckbox3"> Payroll</label>
        </div>
      </div>
      <br><br>
      <div class="card bg-light">
        <div class="card-body">
          <h5>Questions:</h5>
          <div class="questions">
          </div>
          <br><br>
          <button class="btn btn-block btn-info text-white add-question">
            <i class="fa fa-plus"></i>
            Add A Question
          </button>
        </div>
      </div>
      <br><br>
      <div class="form-group text-center">
        <a href="" class="btn btn-link">Cancel</a>
        <button class="btn btn-primary">Save Changes</button>
      </div>
    </form>

  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/checklist-builder.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>
