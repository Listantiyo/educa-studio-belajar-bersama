<!--Edit Modal -->
<div class="modal fade" id="modalCommunity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <label for="">Community name</label>
                  <input type="text" name="commu" class="form-control" required>
              </div>
              <div id="append" class="form-group">
                <input type="file" name="image" class="form-control" value="">
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
  
<!-- Modal -->

