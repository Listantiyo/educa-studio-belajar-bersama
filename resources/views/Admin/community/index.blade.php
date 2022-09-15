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
        <a href="#" onclick="addData()" class="btn btn-success">
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
                        <th>Image</th>
                        <th>Comunitty name</th>
                        <th>Followers</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.community.modal')

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
                {data:'show_image'},
                {data: 'community'},
                {data:'followers'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
      });
    }
  );

  function addData(){
    $('.modal-title').text('Add Community');
    $('#modalCommunity form')[0].reset(); 
    $('#modalCommunity').modal('show'); 

    $("#form").submit(function (e) { 
        e.preventDefault();
        let input = new FormData(this);
        $.ajax({
          type: "post",
          url: "api/data/admin/commu/store",
          data: input,
          contentType: false,
          cache: false,
          processData:false,
          success: function (rsp) {
            table.ajax.reload(rsp);
            $('#modalCommunity').modal('hide');
          }
        });
        // $.post("api/data/admin/commu/store", input,
        //   function (data) {
        //   },
        // );
  
      });
  }

  function editData(id){

    id_up = id;
    // alert(id)
    $('.modal-title').text('Edit Community');
    $('#modalCommunity').modal('show');

    $.get("api/data/admin/commu/edit", {'id':id},
      function (data) {
        $("input[name='commu']").val(data.community);
      },
    );
  }
  
  let id_up;
    $("#form").submit(function (e) { 
        e.preventDefault();
        let input = new FormData(this);
        $.ajax({
          type: "post",
          url: "api/data/admin/commu/update",
          data: input,
          contentType: false,
          cache: false,
          processData:false,
          success: function (rsp) {
            table.ajax.reload();
            $('#modalCommunity').modal('hide');
          }
        });
        // $.post("api/data/admin/commu/update", input+'&id='+id_up,
        //   function (data) {
        //   },
        // );
  
      });

  function deleteData(id){
      $.post("api/data/admin/commu/delete/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          // alert(data);
          table.ajax.reload();
        },
      );
    }

  </script>

@endpush