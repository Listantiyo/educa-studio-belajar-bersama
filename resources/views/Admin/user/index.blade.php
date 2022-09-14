@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <table id="myTable" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ( $users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->level }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-warning mr-2" data-id="{{ $user->id }}" data-myname="{{ $user->name }}" data-myemail="{{ $user->email }}" data-toggle="modal" data-target="#editUser">
                                    <i class="nav-icon fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="nav-icon fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
    </div>
</div>

@include('Admin.user.modal')


@endsection


@push('script')
<script>
    let table; /* global var */

    table = $(document).ready( function () {
        table = $('#myTable').DataTable({
          ajax: {
            url: 'api/data/admin/user',
          },
          columns: [
            {data: 'DT_RowIndex', searchable:false, sortable:false},
            {data: 'name'},
            {data: 'email'},
            {data: 'level'},
            {data: 'aksi', searchable:false, sortable:false}
          ]
        });
    } );

  function editData(id){

    id_up = id;

    $('#editUser').modal('show');

    $.get("api/data/admin/edit/user", {'user_id':id},
      function (data) {
        $("input[name='nama']").val(data.name);
        $("input[name='email']").val(data.email);
      },
    );



  }

  let id_up;

  $("#form").submit(function (e) { 
    e.preventDefault();
    let input = $(this).serialize();
    $.post("api/data/admin/user/update/", input+'&id='+id_up,
      function (data) {
        table.ajax.reload();
        $('#editUser').modal('hide');
      },
    );

  });

  function deleteData(id){
      $.post("api/data/admin/user/delete/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          table.ajax.reload();
        },
      );
    }
  </script>
@endpush