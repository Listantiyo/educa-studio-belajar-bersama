
<div class="modal fade" id="modalGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form" url="" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="modal-body">
              <div class="form-group">
                  <label for="">Group Name</label>
                  <input type="text" name="namegroup" class="form-control" required>
              </div>
              <div class="form-group" id="append">
                <label for="">Image</label>
                <input type="file" id="file-img" name="image" class="form-control" value="">
                {{-- <img id="gbrmdl" src=""> --}}
              </div>
              <div class="form-group" id="append2">
                <label for="">Background</label>
                <input type="file" name="image_bg" id="file-mage" class="form-control" value="">
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
</div>


<div class="modal fade" id="groupDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Group Name : <span class="font-weight-normal" id="gnm"></span></label>
            </div>
            <div class="form-group" id="image1">
                <label for="">Image</label>
                {{-- <img id="mage" src=""> --}}
            </div>
            <div class="form-group" id="image2">
                <label for="">Background</label>
                {{-- <img id="mage2" src=""> --}}
            </div>
        </div>
      </div>
    </div>
</div>