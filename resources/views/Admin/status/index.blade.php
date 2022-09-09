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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#tambahKelas">
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
                        <th>Nama kategori</th>
                        <th>Pertanyaan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.kelas.modal')

@endsection

@push('script')


{{-- <script>

  let table; 

    $(document).ready( function () {
      table =  $('#table').DataTable({
        ajax: {
                url: 'api/data/admin/kelas',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_class'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
      });
  } );

  function deleteData(id){
      alert(id)
      $.post("api/data/admin/kelas/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
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

@endpush --}}