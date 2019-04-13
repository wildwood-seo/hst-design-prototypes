<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 6; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/applicant-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="text-center">
      <h3>Checklist Name</h3>
    </div>
    <br>
    <div class="card bg-light">
      <div class="card-body">
        <div class="questions">
          <div class="question public">
            <h6>About Our Head Start Program</h6>
            <p>Click the button below to read about us, then check the box indicating you've read the web page.</p>
            <a href="" class="btn btn-outline-info"><i class="fa fa-link"></i> Program Information</a>
            <br><br>
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">I confirm that I have read this document.</label>
              </div>
            </div>
          </div>

          <div class="question public">
            <h6>Medical History Form</h6>
            <p>Please download the attached form, complete it, and upload it below.</p>
            <a href="" class="btn btn-outline-info"><i class="far fa-file-pdf"></i> Medical History Form</a>
            <br><br>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                  <label class="custom-file-label" for="inputGroupFile02">Upload the completed form</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
          </div>

          <div class="question public">
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

          <div class="question public">
            <h6>Your Photo</h6>
            <p>Please click the button below to upload your photo. Images should be no larger than 3mb.</p>

            <div class="form-group">
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                  <label class="custom-file-label" for="inputGroupFile02">Upload your photo</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
              <small>Must be a JPG, PNG, or GIF image.</small>
            </div>
          </div>

        </div>
      </div>

      <div class="text-center">
        <button class="btn btn-primary btn-lg">Submit Checklist</button>
        <br><br>
        <p>
          Note: You can submit an incomplete checklist.<br>We'll save your progress for later.
        </p>
      </div>
      <br><br>
    </div>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>
