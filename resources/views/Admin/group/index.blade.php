@extends('Admin.layouts.master')

@section('content')
<style>
    #img{
        width: 40%;
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-top: 20px;
    }

    #imgbg{
        width: 40%;
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-top: 20px;
    }

    #mage{
        width: 40%;
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-top: 20px;
    }

    #magebg{
        width: 40%;
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-top: 20px;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Group</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
                <li class="breadcrumb-item active">Group</li>
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
                Add Group
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="table" class="display table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Group</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@include('Admin.group.modal')

@endsection

@push('script')
<script>
    let table;
    $(document).ready(function () {
        table = $('#table').DataTable({
            ajax: {
                url: 'api/data/admin/group',
            },
            columns: [
                {data: 'DT_RowIndex', searchable:false, sortable:false},
                {data: 'group'},
                {data: 'aksi', searchable:false, sortable:false},
            ]
        });
    });

    let url;
    let input;
    let id_up;

    $("#form").submit(function (e) { 
        e.preventDefault();
        
        input = new FormData(this);
        if (id_up != null){
            input.append('id',id_up);
        }
        $.ajax({
            type: "post",
            url: url,
            data: input,
            contentType: false,
            cache: false,
            processData:false,
            success: function (rsp) {
                table.ajax.reload();
                $('#modalGroup form')[0].reset();
                $('#modalGroup').modal('hide');
                if (url == "api/data/admin/group/store"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Add group success',
                        showConfirmButton: true,
                        timer: 2000
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Update group success',
                        showConfirmButton: true,
                        timer: 2000
                    })
                }
            }
        });
    });

    function showDetail(id){
        alert(id)
        $(".modal-title").text("Detail");
        $("#groupDetail").modal('show');
        $("#img").remove();
        $("#imgbg").remove();
        $.get("api/data/admin/group/edit", {'id':id},
            function (data) {
                console.log(data);
                $("#gnm").text(data.group);
                $("#image1").append("<img id='mage' src=''>");
                $("#mage").attr('src','storage/'+data.path_img);
                $("#image2").append("<img id='magebg' src=''>");
                $("#magebg").attr("src",'storage/'+data.path_img_bg);
            },
        );
    }

    function addData(){
        $("#form").attr("url","api/data/admin/group/store");
        $("#img").remove();
        $("#imgbg").remove();
        $('.modal-title').text("Add Group");
        $("#modalGroup form")[0].reset();
        $("#modalGroup").modal('show');
        url = $("#form").attr("url");

        console.log(url);
    }
    
    function editData(id){
        id_up = id
        console.log(id);
        $("#form").attr("url","api/data/admin/group/update");
        $("#img").remove();
        $("#imgbg").remove();
        $(".modal-title").text("Update Group");
        $("#modalGroup").modal('show');
        url = $("#form").attr("url");
        console.log(url);
        $.get("api/data/admin/group/edit",{'id':id},
            function (data) {
                console.log(data);
                // alert()
               $("input[name='namegroup']").val(data.group);
               $("#append").append("<img id='img' src=''>");
               $("#img").attr("src",'storage/'+data.path_img);
               $("#append2").append("<img id='imgbg' src=''>");
               $("#imgbg").attr('src','storage/'+data.path_img_bg); 
            },
        );
    }

    $(document).ready(() => {
            $("#file-img").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#img")
                        .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

    $(document).ready(() => {
        $("#file-mage").change(function () {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $("#imgbg")
                    .attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });

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
                $.post("api/data/admin/group/delete/"+id,{'_method':'delete'},
                    function (data) {
                        table.ajax.reload();
                        Swal.fire(
                        'Deleted!',
                        'Group has been deleted.',
                        'success'
                        )
                    },
                )
            }
            })

    }




</script>
@endpush