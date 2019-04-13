<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 2 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/app-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>Checklist Name</h3>
        <p>
          <strong>Access:</strong> Human Resources, Technology
        </p>
      </div>
      <div class="col-md-6">
        <a href="edit.php" class="btn btn-info float-right"><i class="fas fa-pencil-alt"></i> Edit</a>
      </div>
    </div>

    <div class="card bg-light">
      <div class="card-body">
        <h5>Questions:</h5>
        <div class="questions">

          <div class="question">
            <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
            <h6>About Our Head Start Program</h6>
            <p>Click the button below to read about us, then check the box indicating you've read the web page.</p>
            <a href="" class="btn btn-outline-info"><i class="fa fa-link"></i> Program Information</a>
          </div>

          <div class="question">
            <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
            <h6>Medical History Form</h6>
            <p>Please download the attached form, complete it, and upload it below.</p>
            <a href="" class="btn btn-outline-info"><i class="far fa-file-pdf"></i> Medical History Form</a>
            <a href="" class="btn btn-info disabled"><i class="fas fa-file-upload"></i> Upload PDF</a>
          </div>

          <div class="question">
            <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
            <h6>Education Level</h6>
            <p>Please select the highest level of education you've completed.</p>
            <select class="form-control">
              <option value="">Some high school</option>
              <option value="">High school diploma / GED</option>
              <option value="">Some college</option>
              <option value="">Associates degree</option>
              <option value="">Bachelors degree</option>
              <option value="">Graduate degree</option>
            </select>
          </div>

          <div class="question">
            <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
            <h6>Your Photo</h6>
            <p>Please click the button below to upload your photo. Images should be no larger than 3mb.</p>
            <a href="" class="btn btn-info disabled"><i class="fas fa-file-upload"></i> Upload Image</a><br>
            <small>Must be a JPG, PNG, or GIF file.</small>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>
