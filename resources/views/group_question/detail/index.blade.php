@extends('layouts.master')
@section('content') 

        <div class="middull-content">
            <ul class="page-nish">
                <li>
                    <a href="{{route('menu')}}">
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

                @include('group_question.detail.quest')
                @include('group_question.detail.answer')
                <hr>
                <form id="answer-form" class="your-answer-form">
                    <div class="form-group">
                        <h3>Your Answer</h3>
                    </div>
                    <div class="form-group">
                        <div id="txtEditor"></div>
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
            list_com_url = "\\api/community/show"

            $("#side-community").remove();

        </script>
{{-- scroll --}}
        <script>
            $(document).ready(function () {
            
                $("#buttons").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#answer-form").offset().top - 155 
                    }, 0);
                });
            });
        </script>
{{-- vue --}}
        <script>
            let id_answer;
            const vues = Vue.createApp({
                data() {
                    return {
                        answer:'',
                        comment:'',
                    }
                },mounted() {
                    
                    $(document).ready(function () {
                        let id_quest = {{$id}}
                        let id_user = {{Auth::id()}}
                        $.ajax({
                            type: "get",
                            url: "\\api/group/answer/show",
                            data: {id_quest:id_quest,id_user:id_user},
                            success: function (rsp) {
                                // alert(rsp.asnwer)
                                vues.answer = rsp.answer
                            }
                        });

                        // addAsnwer
                        $("#answer-form").submit(function (e) { 
                            e.preventDefault();
                            let text = $("#txtEditor").Editor("getText"); 
                            $.post("\\api/group/answer/store", {text:text,id_quest:id_quest,id_user:id_user},
                                function (rsp) {
                                    // alert()
                                    console.log(rsp);
                                    vues.answer = rsp.answer
                                },
                            );
                        });

                        $("#reply-form").submit(function (e) { 
                            e.preventDefault();
                            let data = $("#reply-form input").val();
                            let ini  = 'group';
                            $.post("\\api/data/store/coment", 
                                
                                {id_answer:id_answer,comment:data,id_quest:id_quest,id:id_user,ini:ini},

                                function (rsp) {
                                    vues.comment = rsp
                                    $("#reply-form input").val(null);
                                },
                            );
                            
                        });

                        $("#fillter-answer").change(function (e) { 
                            e.preventDefault();
                            let jumlah = $(this).val();
                            let ini = 'group';
                             $.ajax({
                                type: "get",
                                url: "\\api/answer/show",
                                data: {id_quest:id_quest,jumlah:jumlah,id_user:id_user,ini:ini},
                                success: function (rsp) {
                                    // alert(rsp.asnwer)
                                    vues.answer = rsp.answer
                                }
                            });
                        });

                    });
                },methods: {
                    repLy(id){
                        let id_quest    = {{$id}}
                        id_answer       = id
                        let ini         = 'group';

                        $.get("\\api/data/show/coment", {id_answer:id,id_quest:id_quest,ini:ini},
                            function (rsp) {
                                vues.comment = rsp
                            },
                        );
                        $('#modal-reply').modal('show');
                        
                    },
                    likE(id){

                        let id_quest = {{$id}}
                        let id_user  = {{Auth::id()}}
                        let type     = 'like'
                        let ini      = 'group';

                        if(!$(".like.answer-link"+id).hasClass('active')) {
                            $(".answer-link"+id).removeClass("active");
                            $(".like.answer-link"+id).addClass("active");
                            $.ajax({
                                type: "post",
                                url: "\\api/answer/likedislikestore",
                                data: {id_user:id_user,id_quest:id_quest,ini:ini,'type':type,'id_answer':id},
                                dataType: "json",
                                success: function (rsp) {
                                    alert(rsp)
                                }
                            });
                        }else{
                            type = type+'remove';
                            $(".like.answer-link"+id).removeClass("active");
                            $.ajax({
                                type: "post",
                                url: "\\api/answer/likedislikestore",
                                data: {id_user:id_user,id_quest:id_quest,ini:ini,'type':type,'id_answer':id},
                                dataType: "json",
                                success: function (rsp) {
                                    alert(rsp)
                                }
                            });
                        }
                    },
                    dislikE(id){
                        
                        let id_quest = {{$id}}
                        let id_user  = {{Auth::id()}}
                        let type     = 'dislike'
                        let ini      = 'group';

                        if(!$(".dislike.answer-link"+id).hasClass('active')) {
                            $(".answer-link"+id).removeClass("active");
                            $(".dislike.answer-link"+id).addClass("active");
                            
                            $.ajax({
                                type: "post",
                                url: "\\api/answer/likedislikestore",
                                data: {id_user:id_user,id_quest:id_quest,ini:ini,'type':type,'id_answer':id},
                                dataType: "json",
                                success: function (rsp) {
                                    alert(rsp)
                                }
                            });
                        }else{
                            type = type+'remove';
                            $(".dislike.answer-link"+id).removeClass("active");
                            $.ajax({
                                type: "post",
                                url: "\\api/answer/likedislikestore",
                                data: {id_user:id_user,id_quest:id_quest,ini:ini,'type':type,'id_answer':id},
                                dataType: "json",
                                success: function (rsp) {
                                    alert(rsp)
                                }
                            });
                        }
                    }
                },
            }).mount('#app')
        </script>
@auth
{{-- likedis quest --}}
        <script>
             $(document).ready(function() {
                // load like
                let id_quest = {{$id}}
                let id_user = {{Auth::id()}}
                let ini = 'group';
                alert(id_quest)
                $.ajax({
                    type: "get",
                    data: {id:id_user,id_quest:id_quest,ini:ini},
                    url: "\\api/quest/likedislike",
                    success: function (rsp) {
                        // alert(rsp)
                        if (rsp.disorlike == 'like') {
                            $("button[name='like']").addClass("active");
                        }
                        if (rsp.disorlike == 'dislike') {
                            $("button[name='dislike']").addClass("active");
                        }
                        if (rsp.votes == 'vote') {
                            $("#votes").removeClass('bg-info');
                            $("#votes").addClass('bg-warning');
                            $("#votes").append('<i id="flag" class="ri-flag-2-fill" style="font-size:12px;"></i>');
                        }
                    }
                });
                // like n dislike
                $(".quest-link.like-unlink-count").click(function () {
                    alert()
                let type = $(this).val();
                let ini = 'group';

                if(!$(this).hasClass('active')) {
                    alert(type)
                    $(".quest-link.like-unlink-count").removeClass("active");
                    $(this).addClass("active");
                    $.ajax({
                        type: "post",
                        url: "\\api/quest/likedislikestore",
                        data: {id:id_user,id_quest:id_quest,ini:ini,'type':type},
                        dataType: "json",
                        success: function (rsp) {
                            alert(rsp)
                        }
                    });
                }else{
                    type = type+'remove';
                    alert(type)
                    $(".quest-link.like-unlink-count").removeClass("active");
                    $.ajax({
                        type: "post",
                        url: "\\api/quest/likedislikestore",
                        data: {id:id_user,id_quest:id_quest,ini:ini,'type':type},
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
<script>
    $(document).ready(function () {
        id_user = {{Auth::id()}}
        $.get(list_com_url, {id_user:id_user},
            function (rsp) {
                console.log(rsp);
                if (rsp.is > 0 && rsp.img[0] != null) {
                    console.log(rsp.img[0]);

                        $("#photo-user").attr("src", "null");
                        $("#photo-user").attr("src", "\\storage/"+rsp.img[0]);
                    
                }
            },
        );
    });
</script>
@endpush