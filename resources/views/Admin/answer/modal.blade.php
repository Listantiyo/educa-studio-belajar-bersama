<style>
  .modal-footer{
    display: block;
  }
</style>

<!-- Modal -->
<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- {{ csrf_field() }} --}}
        <div class="modal-body">
          <div class="form-group">
            <label>Nama : <span class="font-weight-normal" id="name"></span></label>
          </div>
          <div class="form-group">
            <label>Question : <span class="font-weight-normal" id="quest"></span></label>
          </div>
          <div class="form-group">
            <label>Answer : <span class="font-weight-normal" id="answ"></span></label>
          </div>
        </div>
        <div class="modal-footer">
          <div class="d-flex justify-content-between">
            <form id="accept">
              <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-check"></i>
                ACC
              </button>
            </form>
              <button onclick="reject()" type="button" class="btn btn-danger">
                <i class="fa-solid fa-xmark"></i>
                REJECTED
              </button>
            </div>
          </div>
      </div>
    </div>
  </div>

