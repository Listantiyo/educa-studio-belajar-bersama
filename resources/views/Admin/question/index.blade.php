@extends('Admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pertanyaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admindashboard')}}">Home</a></li>
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
            <table id="myTable" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Id User</th>
                        <th>Id Type</th>
                        <th>Id Kelas</th>
                        <th>Id Mapel</th>
                        <th>Pertanyaan</th>
                        <th>Img</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $q)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $q->id_user_dil }}</td>
                        <td>{{ $q->id_type }}</td>
                        <td>{{ $q->id_kelas }}</td>
                        <td>{{ $q->id_mapel }}</td>
                        <td>{{ $q->question }}</td>
                        <td>{{ $q->path_qst_img }}</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    $(document).ready( function () {
      $('#myTable').DataTable();
  } );
  </script>
@endpush