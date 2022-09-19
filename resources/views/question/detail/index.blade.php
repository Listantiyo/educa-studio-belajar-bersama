@extends('layouts.master')
@section('content') 

        <div class="middull-content">
            <ul class="page-nish">
                <li>
                    <a href="index.html">
                        <i class="ri-home-8-line"></i>
                        Home
                    </a>
                </li>
                <li>
                    Question
                </li>
                <li class="active">
                    Question Details
                </li>
            </ul>
            
            <form class="aq-form">
                <i class="ri-search-line"></i>
                <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
                <button class="aq-btn">
                    Ask Question
                </button>
            </form>
            <div class="question-details-area">

                @include('question.detail.quest')
                @include('question.detail.asnwer')

                <form class="your-answer-form">
                    <div class="form-group">
                        <h3>Your Answer</h3>
                    </div>
                    <div class="form-group">
                        <div id="txtEditor"></div>
                    </div>
                    <div class="form-group">
                        <h3>Post as a guest</h3>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="default-btn">Post your answer</button>
                    </div>
                </form>
            </div>
        </div>

@endsection 

@push('scripts')
    
        <script>

            const vues = Vue.createApp({
                data() {
                    return {
                        like_count:'',
                        dislike_count:'',
                    }
                },mounted() {
                    
                },methods: {

                },
            }).mount('#app')
        </script>
@auth
        <script>
             $(document).ready(function() {
                // load like
                let id_quest = {{$id}}
                let id_user = {{Auth::id()}}
                alert(id_quest)
                $.ajax({
                    type: "get",
                    data: {id:id_user,id_quest:id_quest},
                    url: "\\api/quest/likedislike",
                    success: function (rsp) {
                        alert(rsp)
                        if (rsp == 'like') {
                            $("button[name='like']").addClass("active");
                        }
                        if (rsp == 'dislike') {
                            $("button[name='dislike']").addClass("active");
                        }
                    }
                });
                // like n dislike
                $(".like-unlink-count").click(function () {

                let type = $(this).val();

                if(!$(this).hasClass('active')) {
                    alert(type)
                    $(".like-unlink-count").removeClass("active");
                    $(this).addClass("active");
                    $.ajax({
                        type: "post",
                        url: "\\api/quest/likedislikestore",
                        data: {id:id_user,id_quest:id_quest,'type':type},
                        dataType: "json",
                        success: function (rsp) {
                            alert(rsp)
                        }
                    });
                }else{
                    type = type+'remove';
                    alert(type)
                    $(".like-unlink-count").removeClass("active");
                    $.ajax({
                        type: "post",
                        url: "\\api/quest/likedislikestore",
                        data: {id:id_user,id_quest:id_quest,'type':type},
                        dataType: "json",
                        success: function (rsp) {
                            alert(rsp)
                        }
                    });
                }
            });
            });
        </script>
@endauth

@endpush