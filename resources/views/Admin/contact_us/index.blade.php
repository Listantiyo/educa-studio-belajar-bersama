@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Contact</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
    
@include('Admin.contact_us.modal')

@endsection

@push('script')
<script>
    let table;
     $(document).ready(function () {
        table = $('#table').DataTable({
            ajax: {
                url: 'api/data/admin/contact',
            },
            columns: [
                {data: 'DT_RowIndex', searchable:false, sortable:false},
                {data: 'name_user'},
                {data: 'aksi', searchable:false, sortable:false},
            ]
        });
     });

     function showDetail(id){
        $(".modal-title").text("Detail");
        $("#detailContact").modal('show');
        $.get("api/data/admin/contact/show",{'id':id},
            function (data) {
                console.log(data);
                $("#name").text(data.name_user);
                $("#mail").text(data.email);
                $("#sub").text(data.subject);
                $("#mess").text(data.message);
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
                $.post("api/data/admin/contact/"+id, {'_method':'delete'},
                    function (data) {
                        table.ajax.reload();
                        Swal.fire(
                        'Deleted!',
                        'Contact has been deleted.',
                        'success'
                        )
                    },
                )
            }
            })
     }
</script>    
@endpush