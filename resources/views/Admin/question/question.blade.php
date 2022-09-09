@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Jurusan</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Jurusan</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
	<div class="container-fluid">

<div class="card">
    <div class="card">
        <div class="card-header text-right">
            <a href="{{ route('createJurusan')}}" class="btn btn-primary" role="button">Tambah Siswa</a>
        </div>
        <div class="card-body p-0">

        </div>

        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @endif

    </div>
    <div class="card-body p-3">
        <table class="table table-hover mb-0" id="data-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Jurusan</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $j)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $j->nama }}</td>
                    <td>{{ $j->deskripsi }}</td>
                    <td>
                        <a onclick="confirmEdit(this)"
                        data-url="{{ route('editJurusan', ['id' => $j->id])}}"
                        class="btn btn-warning btn-sm" role="button">Edit</a>

                        <a onclick="confirmDelete(this)"
                        data-url="{{ route('deleteJurusan', ['id' => $j->id])}}"
                        class="btn btn-danger btn-sm" role="button">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
@section('addCss')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('addJavascript')
<script src="{{ asset('js/dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
    $(function () {
        $("#data-table").DataTable();
    })

    confirmDelete = function (button) {
        var url = $(button).data('url');
        swal({
            'title': 'konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function (value) {
            if (value) {
                window.location = url;
            }
        })
    }

    $(function () {
        $("#data-table").DataTable();
    })

    confirmEdit = function (button) {
        var url = $(button).data('url');
        swal({
            'title': 'konfirmasi Edit',
            'text': 'Apakah kamu yakin ingin Mengedit Data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function (value) {
            if (value) {
                window.location = url;
            }
        })
    }
</script>
@endsection
