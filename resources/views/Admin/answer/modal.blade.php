<!-- Modal -->
<div class="modal fade" id="editAnswer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form" method="post">
          {{ csrf_field() }}
          <div class="modal-body">
            <div class="form-group">
                <label>Title </label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label>Question :</label>
                <input type="text" name="question" class="form-control" id="question" required>
            </div>
            <div class="form-group">
              <label>Tags :</label>
              <input type="text" name="tags" class="form-control" id="tags" required>
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
<div class="modal fade" id="addAnswer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
              <label>Pertanyaan </label>
              <input type="text" name="title" class="form-control" id="title" required>
          </div>
          <div class="form-group">
              <label>Jawaban :</label>
              <input type="text" name="question" class="form-control" id="question" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
