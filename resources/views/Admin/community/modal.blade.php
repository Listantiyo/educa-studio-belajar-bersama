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
              <div class="form-group" id="append">
                <input type="file" id="file-img" name="image" class="form-control" value="">
                <img id="gbrmdl" src="">
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
<div class="modal fade" id="commuDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail community</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div id="gbr">
          </div>
          <div class="mt-5" id="cm">
              <label>Community :</label>
          </div>
          <div id="fl">
              <label>Followers :</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
