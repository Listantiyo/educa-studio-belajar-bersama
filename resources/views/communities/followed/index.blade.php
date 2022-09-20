{{-- Mid Content --}}
@extends('layouts.master')
@section('style')
    <style>
        #com-follow:hover{
            color: blue;
        }
    </style>
@section('content')
    <div class="middull-content">
        <ul class="page-nish">
            <li>
                <a href="index.html">
                    <i class="ri-home-8-line"></i>
                    Home
                </a>
            </li>
            <li class="active">
                Communities
            </li>
        </ul>

        <form class="aq-form">
            <i class="ri-search-line"></i>
            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
            <button class="aq-btn">
                Ask Question
            </button>
        </form>

        <div class="row justify-content-center">

@foreach ($follow as $item) 
                <div id="unfollow{{$item->id}}" class="col-xl-4 col-sm-6">
                    <div class="single-communities-box">
                        <img src="assets/images/communities/programing.png" alt="Image">
                        <h3>
                            <a href="communities.html">{{$item->community}}</a>
                        </h3>
                        <ul class="d-flex justify-content-between">
                            <li>{{$item->followers}} Followers</li>
                            <li>
                                <button id="com-follow" onclick="folloW('{{$item->id}}')" class="active" value="{{$item->id}}">Unfollow</button>
                            </li>
                        </ul>
                    </div>
                </div>
@endforeach
        </div>
    </div>


{{-- Mid Content End --}}
@endsection

@push('scripts')
    <script>
        function folloW(id){
            let type = "unfollow"
            let id_user = {{Auth::id()}}
            $.post("\\api/community/un_follow", {id:id,id_user:id_user,type:type},
                function (rsp) {
                    alert(rsp.alert)
                    $("#unfollow"+rsp.id).remove();
                },
            );
            
        }
        $(document).ready(function () {
        });
    </script>
@endpush
 