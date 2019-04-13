
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
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02">
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
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
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02">
              <label class="custom-file-label" for="inputGroupFile02">Choose PDF file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
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
            <option value="" selected>&mdash; Select &mdash;</option>
            <option value="short-answer">Short Answer</option>
            <option value="long-answer">Paragraph(s)</option>
            <option value="single-select">Single Item From List</option>
            <option value="multi-select">Multiple Items From List</option>
            <option value="yes-no">Yes/No</option>
          </select>
        </div>
        <div class="rules short-answer" style="display:none">
          <div class="form-group">
            <label><sronng>Validation Rules</sronng></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Must be a valid email</label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Must be a valid URL</label>
            </div>            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Must be numbers only</label>
            </div>            
          </div>
        </div>

        <div class="rules long-answer" style="display:none">
          <div class="form-group">
            <label><sronng>Validation Rules</sronng></label>
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

        <div class="rules single-select multi-select" style="display:none">
          <div class="form-group">
            <label><sronng>Options</sronng></label>
            <div class="form-group">
              <div class="row question-select-option">
                <div class="col-md-11">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-1">
                  <a href="" class="x hidden">&times;</a>
                </div>
              </div>
            </div>
            <a href="" class="add-another">+ add another item</a>
          </div>
        </div>

        <div class="rules yes-no" style="display:none">
          <div class="form-group">
            <label><sronng>Validation Rules</sronng></label>
            <p><em>No addition rules available for this question</em></p>
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
    <small>Must be a JPG, PNG, or GIF file.</small>
  </div>
</div>

