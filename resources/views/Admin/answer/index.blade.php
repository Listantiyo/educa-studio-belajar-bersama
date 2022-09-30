@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Answer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Answer</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  {{-- <div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" onclick="addData()" class="btn btn-success">
            <i class="nav-icon fa-solid fa-plus"></i>
            Tambah
        </a>
    </div>
  </div> --}}
<div class="container">
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.answer.modal')
@endsection


@push('script')


<script>

  let table; 

    $(document).ready( function () {
      table =  $('#table').DataTable({
        ajax: {
              url: 'api/data/admin/answer',/* api route */
            },
            columns: [
              {data: 'DT_RowIndex', searchable: false, sortable: false},
              {data: 'name'},/* sesuai di database */
              {data: 'question'},
              {data: 'answer'},
              {data: 'aksi', searchable: false, sortable: false}
            ]
      });
    });


  
    function showDetail(id){
      $(".modal-title").text("Detail");
      $("#answerModal").modal('show');
      $(".modal-footer").hide();
      $.get("api/data/admin/answer/show",{'id':id},
        function (data) {
          console.log(data);
          $("#name").text(data[0].name);
          $("#quest").text(data[0].question);
          $("#answ").text(data[0].answer);
        },
      );
    }

  function deleteData(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.post("api/data/admin/answer/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}'},
          function (data) {
            table.ajax.reload();
          },
        ),
        Swal.fire(
          'Deleted!',
          'Answer has been deleted.',
          'success'
        )
      }
    })
  }

  </script>

@endpush