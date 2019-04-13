<?php require $_SERVER['DOCUMENT_ROOT']."/includes/header.php"; ?>

<?php $tab = 1 ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/includes/admin-navbar.php"; ?>
<div id="app">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <h3>New Checklist Template</h3>
      </div>
    </div>
    <form action="" method="post">
      <div class="form-group">
        <label>Template Name</label>
        <input type="text" name="name" class="form-control">
      </div>
    </form>
    <div class="template-wrapper">
      <div class="question-list">
        <ul class="mini-questions">
        </ul>
        <button class="btn btn-block btn-info text-white add-question">
          <i class="fa fa-plus"></i>
          <br>
          Question
        </button>
      </div>
      <div class="questions">
      </div>
    </div>

  </div>
</div>


<!-- Question picker modal -->
<div class="modal" tabindex="-1" role="dialog" id="question-picker" style="display:none">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Question Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col col-md-6">
            <button class="btn btn-block btn-outline-info question-type-1">
              <i class="far fa-check-square fa-3x"></i><br>
              Request Confirmation of an Item
            </button>
          </div>
          <div class="col col-md-6">
            <button class="btn btn-block btn-outline-info question-type-2">
              <i class="far fa-file-pdf fa-3x"></i><br>
              Request A Signed PDF
            </button>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col col-md-6">
            <button class="btn btn-block btn-outline-info question-type-3">
              <i class="fas fa-keyboard fa-3x"></i><br>
              Request For User Input
            </button>
          </div>
          <div class="col col-md-6">
            <button class="btn btn-block btn-outline-info question-type-4">
              <i class="fas fa-file-upload fa-3x"></i><br>
              Document Upload Request
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Question 1 -->

<div class="modal" tabindex="-1" role="dialog" id="question-type-1" style="display:none">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request Confirmation of an Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Please enter a title">
        </div>
        <div class="form-group">
          <label>Conformation Request Text</label>
          <textarea class="form-control" rows="3">Please confirm that you have read this document.</textarea>
        </div>
        <div class="form-group">
          <label>Document Name</label>
          <input type="text" class="form-control" placeholder="Name your file">
        </div>
        <div class="form-group">
          <label>Document URL</label>
          <input type="text" class="form-control" placeholder="https://...">
        </div>
        <div class="text-center">&mdash; or &mdash;</div>
        <div class="form-group">
          <label>Document File</label>
          <input type="file" class="form-control-file">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary add-question-1">Add Question</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="question-1-sample" style="display:none">
  <div class="question">
    <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
    <h6>About Our Head Start Program</h6>
    <p>Click the button below to read about us, then check the box indicating you've read the web page.</p>
    <a href="" class="btn btn-outline-info"><i class="fa fa-link"></i> Program Information</a>
  </div>
</div>


<!-- Question 2 -->

<div class="modal" tabindex="-1" role="dialog" id="question-type-2" style="display:none">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request For Signed PDF File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Please enter a title">
        </div>
        <div class="form-group">
          <label>Description Text</label>
          <textarea class="form-control" rows="3">Please download the PDF below, complete it, and upload it.</textarea>
        </div>
        <div class="form-group">
          <label>Document Name</label>
          <input type="text" class="form-control" placeholder="Name your file">
        </div>
        <div class="form-group">
          <label>PDF File</label>
          <input type="file" class="form-control-file">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary add-question-2">Add Question</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="question-2-sample" style="display:none">
  <div class="question">
    <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
    <h6>Medical History Form</h6>
    <p>Please download the attached form, complete it, and upload it below.</p>
    <a href="" class="btn btn-outline-info"><i class="far fa-file-pdf"></i> Medical History Form</a>
    <a href="" class="btn btn-info disabled"><i class="fas fa-file-upload"></i> Upload PDF</a>
  </div>
</div>


<!-- Question 3 -->

<div class="modal" tabindex="-1" role="dialog" id="question-type-3" style="display:none">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request User Input</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Please enter a title">
        </div>
        <div class="form-group">
          <label>Description Text</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Response Type</label>
          <select class="form-control fillable-type">
            <option value="">Short Answer</option>
            <option value="">Paragraph(s)</option>
            <option value="">Single Item From List</option>
            <option value="">Multiple Items From List</option>
            <option value="">Yes/No</option>
          </select>
        </div>
        <div class="short-answer" style="display:none">
          <div class="form-group">
            <label>Validation Rules</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Required</label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Must be valid email</label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Must be valid URL</label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Numbers Only</label>
            </div>            
          </div>
        </div>

        <div class="long-answer" style="display:none">
          <div class="form-group">
            <label>Validation Rules</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Required</label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <span style="display:inline-block; width:140px">Minimum Length</span>
                <input type="number" size="2" style="width:50px;">&nbsp;&nbsp;&nbsp; Characters
              </label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                <span style="display:inline-block; width:140px">Maximum Length</span>
                <input type="number" size="2" style="width:50px">&nbsp;&nbsp;&nbsp; Characters
              </label>
            </div>            
          </div>
        </div>

        <div class="single-item multi=item" style="display:none">
          <div class="form-group">
            <label>Validation Rules</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Required</label>
            </div>            
            <br>
            Items:
            <div class="form-group">
              <div class="row">
                <div class="col-md-11">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-1">
                  <a href="" class="x">&times;</a>
                </div>
              </div>
            </div>
            <a href="" class="add-another">+ add another item</a>
          </div>
        </div>

        <div class="yess-no" style="display:none">
          <div class="form-group">
            <label>Validation Rules</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Required</label>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary add-question-3">Add Question</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="question-3-sample" style="display:none">
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
</div>


<!-- Question 4 -->

<div class="modal" tabindex="-1" role="dialog" id="question-type-4" style="display:none">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request For Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Please enter a title">
        </div>
        <div class="form-group">
          <label>Description Text</label>
          <textarea class="form-control" rows="3">Please upload this document.</textarea>
        </div>
        <div class="form-group">
          <label>Accepted File Types:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Images: JPG, PNG, GIF</label>
          </div>            
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">PDF File</label>
          </div>            
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Word Document</label>
          </div>            
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Plain Text</label>
          </div>            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary add-question-4">Add Question</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="question-4-sample" style="display:none">
  <div class="question">
    <a class="delete" href=""><i class="fa fa-trash text-danger"></i></a>
    <h6>Your Photo</h6>
    <p>Please click the button below to upload your photo. Images should be no larger than 3mb.</p>
    <a href="" class="btn btn-info disabled"><i class="fas fa-file-upload"></i> Upload Image</a><br>
    <small>Must be a JPG, PNG, or GIF file.</small>
  </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/includes/footer.php"; ?>
