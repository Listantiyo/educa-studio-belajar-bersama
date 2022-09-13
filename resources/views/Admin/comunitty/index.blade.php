@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Comunitty</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Comunitty</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#comunittyModal">
            <i class="nav-icon fa-solid fa-plus"></i>
            Tambah
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Comunitty name</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.comunitty.modal')

@endsection

@push('script')


<script>

  let table; 

    $(document).ready( function () {
      table =  $('#table').DataTable({
        ajax: {
                url: 'api/data/admin/commu',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'community'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
      });
    }
  );

  function editData(id){
    $('#comunittyModal').modal('show');

    $.get("api/data/admin/commu", {'id':id},
      function (data) {
        $("input[name='commu']").val(data.comunitty);
      },
    );

  $("#form").submit(function (e) { 
      e.preventDefault();
      let input = $(this).serialize();
      $.post("api/data/admin/commu/update/", input+'&id='+id,
        function (data) {
          table.ajax.reload();
          $('#comunittyModal').modal('hide');
        },
      );

    });
  }

  function deleteData(id){
      alert(id)
      $.post("api/data/admin/commu/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          alert(data);
          table.ajax.reload();
        },
      );
    }

  </script>

@endpush