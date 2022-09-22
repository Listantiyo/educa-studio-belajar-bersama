<!-- Modal -->
<div class="modal fade" id="editQuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label>Title :</label>
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
<div class="modal fade" id="questDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div>
              <label for="uname">Nama : <span class="font-weight-normal" id='uname'></span></label>
          </div>
          <div>
            <label>Community : <span class="font-weight-normal" id='com'></span></label>
          </div>
          <div>
              <label>Title : <span class="font-weight-normal" id='tit'></span></label>
              {{-- <p id="tit"></p> --}}
          </div>
          <div>
            <label>Image :</label>
            <img id='gmbr' src=''>
          </div>
          <div class="my-3">
              <label>Question : <span class="font-weight-normal" id='quest'></span></label>
          </div>
          <div>
            <label>Views : <span class="font-weight-normal" id='vie'></span></label>
          </div>
          <div class="row text-center">
            <div class="col-sm-4">
              <label for="">
                Like : <span id="like"></span>
              </label>
            </div>
            <div class="col-sm-4">
              <label for="">
                Dislike : <span id="dislike"></span>
              </label>
            </div>
            <div class="col-sm-4">
              <label for="">
                Vote : <span id="vote"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- @push('script')
<script>
  var id;
  $('#editQuest').on('show.bs.modal', function (event) {

    console.log('Modal open');
  var button = $(event.relatedTarget)
  var title = button.data('title') 
  var question = button.data('quest')
  var tags = button.data('tags')
      id = button.data('id')

  var modal = $(this)
  modal.find('.modal-body #title').val(title);
  modal.find('.modal-body #question').val(question);
  modal.find('.modal-body #tags').val(tags);
})

$(document).ready(function () {
  $("#form").submit(function (e) { 
    e.preventDefault();
    let inpu = $(this).serialize();
    $.post("api/adminquestion/update/", inpu+'&id='+id,
      function (data) {
        alert(data)
      },
    );

  });
});
</script>
@endpush --}}

<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
              <label>Nama :</label>
              <input type="text" name="nama" class="form-control" id="name" required>
          </div>
          <div class="form-group">
              <label>Email :</label>
              <input type="email" name="email" class="form-control" id="email" required>
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
<div class="modal fade" id="addQuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
              <label>Jawaban :</label>
              <textarea class="form-control" rows="3" name="asnwer" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>