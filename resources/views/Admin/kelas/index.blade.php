@extends('Admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kelas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kelas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#exampleModalCenter">
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
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ( $classes as $kelas)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $kelas->nama_class }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-warning mr-2">
                                    <i class="nav-icon fa-solid fa-pen-to-square"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="nav-icon fa-solid fa-trash"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
</div>

{{-- Start Modal --}}
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('script')
<script>
    $(document).ready( function () {
      $('#table').DataTable({
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
  </script>
@endpush