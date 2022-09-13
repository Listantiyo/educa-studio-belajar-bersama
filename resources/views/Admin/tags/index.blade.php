@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tags</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Tags</li>
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
            Add
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Tag</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.tags.modal')

@endsection

@push('script')


<script>

  let table; 

    $(document).ready( function () {
      table =  $('#table').DataTable({
        ajax: {
                url: 'api/data/admin/tags',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'tag'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
      });
  } );

  function deleteData(id){
      alert(id)
      $.post("api/data/admin/tags/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          alert(data);
          table.ajax.reload();
        },
      );
    }

    function editData(id){
      $('#kelasModal').modal('show');
    }

    // function tambahData(){
    //   $('#tambahModal').modal('show');
    // }
  </script>

@endpush