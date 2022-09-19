@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pertanyaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        {{-- <th>#</th> --}}
                        <th>Id</th>
                        <th>user</th>
                        <th>Type</th>
                        <th>Community</th>
                        <th>Title</th>
                        <th>Pertanyaan</th>
                        <th>Tags</th>
                        <th>Like</th>
                        <th>Dislike</th>
                        <th>Vote</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tbody>
                  @foreach ( $questions as $quest)
                      <tr>
                          <td>{{ $loop->index + 1 }}</td>
                          <td>{{ $quest->id_user_dil }}</td>
                          <td>{{ $quest->title }}</td>
                          <td>{{ $quest->question }}</td>
                          <td>{{ $quest->tags }}</td>
                          <td>{{ $quest->like }}</td>
                          <td>{{ $quest->dislike }}</td>
                          <td>{{ $quest->votes }}</td>
                          <td>{{ $quest->image }}</td>
                          <td class="d-flex justify-content-center">
                              <a href="#" class="btn btn-sm btn-warning mr-2" data-id="{{ $quest->id }}" data-user="{{ $quest->id_user_dil }}" data-title="{{ $quest->title }}" data-quest="{{ $quest->question }}" data-tags="{{ $quest->tags }}" data-like="{{ $quest->like }}" data-dislike="{{ $quest->dislike }}" data-vote="{{ $quest->vote }}" data-image="{{ $quest->image }}" data-toggle="modal" data-target="#editQuest">
                                  <i class="nav-icon fa-solid fa-pen-to-square"></i>
                              </a>
                              <a onclick="deleteData({{$quest->id}})" href="#" class="btn btn-sm btn-danger">
                                  <i class="nav-icon fa-solid fa-trash"></i>
                              </a>
                          </td>
                      </tr>
                  @endforeach  --}}
              </tbody>
            </table>
          </div>
      </div>
      </div>
  </div>
  
  @include('Admin.question.modal')
  
  
  @endsection
  
  
  @push('script')
  <script>

    let table;

    $(document).ready(function () {
      table = $('#table').DataTable({
        ajax: {
          url: 'api/data/admin/quest',
        },
        columns: [
          // {data: 'DT_RowIndex', searchable:false, sortable:false},
          {data: 'id'},
          {data: 'name'},
          {data: 'nama_type'},
          {data: 'community'},
          {data: 'title'},
          {data: 'question'},
          {data: 'tags'},
          {data: 'like'},
          {data: 'dislike'},
          {data: 'votes'},
          {data: 'image'},
          {data: 'aksi', searchable:false, sortable:false}
        ]
      });
    });

    function deleteData(id){
      alert(id)
      $.post("api/data/admin/quest/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          alert(data);
          table.ajax.reload();
        }, 
      );
    }

    function editData(id){
      $('#typesModal').modal('show');
    }
    
      $(document).ready( function () {
        $('#myTable').DataTable();
    } );  
    </script>
  @endpush
