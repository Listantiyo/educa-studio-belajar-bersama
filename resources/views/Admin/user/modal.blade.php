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

@push('script')
  <script>
    var id;
    $('#editUser').on('show.bs.modal', function (event) {

      console.log('Modal open');
    var button = $(event.relatedTarget)
    var name = button.data('myname') 
    var email = button.data('myemail')
        id = button.data('id')

    var modal = $(this)
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #email').val(email);
  })

  $(document).ready(function () {
    $("#form").submit(function (e) { 
      e.preventDefault();
      let inpu = $(this).serialize();
      // console.log(inpu+'&id='+id);
      $.post("api/adminuser/update/", inpu+'&id='+id,
        function (data) {
          alert(data)
        },
      );

    });
  });
  </script>
@endpush