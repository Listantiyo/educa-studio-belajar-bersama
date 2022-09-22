@extends('layouts.master')

@section('content')

    @include('most_visited.content')

@endsection
@push('scripts')
    <script>
        const vues = Vue.createApp({
            data() {
                return {
                    quest:'',
                    first_page_url:'',
                    last_page_url:'',
                    prev_page_url:'',
                    next_page_url:'',
                    last_page:'',
                    current_page:'',
                    path:'',
                }
            },
            mounted() {
                $(document).ready(function () {
                    $.ajax({
                        type: "get",
                        url: "api/most-visited/show",
                        success: function (rsp) {
                            console.log(rsp.quest)
                            vues.quest = rsp.quest.data
                            vues.first_page_url = rsp.quest.first_page_url
                            vues.last_page_url = rsp.quest.last_page_url
                            vues.last_page = rsp.quest.last_page
                            vues.prev_page_url = rsp.quest.prev_page_url
                            vues.next_page_url = rsp.quest.next_page_url
                            vues.current_page = rsp.quest.current_page
                            vues.path = rsp.quest.path
                        }
                    });
                });
            },
            methods: {
                // pagginate button
                pagginate(url){
                    console.log(url);
                    $.ajax({
                        type: "GET",
                        contentType: "application/json",
                        dataType: "json",
                        url: url,
                        success: function (rsp) {
                            console.log(rsp);   
                            vues.tags = rsp.data
                            vues.first_page_url = rsp.first_page_url
                            vues.last_page_url = rsp.last_page_url
                            vues.last_page = rsp.last_page
                            vues.prev_page_url = rsp.prev_page_url
                            vues.next_page_url = rsp.next_page_url
                            vues.current_page = rsp.current_page
                            vues.path = rsp.path
                        }
                    });
                },
                // search-pagginate
                searchPagginate(url){
                    var url = url+'?page='
                    let num = $("#search-pagginate").val();
                    console.log(url);

                    if (num == '') {

                        $("#search-pagginate").val(null);
                        alert("please input number of page")

                    }else if(num > vues.last_page){

                        $("#search-pagginate").val(null);
                        alert("your input out of range, the last page is " + vues.last_page)

                    }else{                    
                        $.ajax({
                            type: "GET",
                            contentType: "application/json",
                            dataType: "json",
                            url: url+num,
                            success: function (rsp) {
                                scrollToTop() 
                                console.log(rsp);   
                                vues.tags = rsp.data
                                vues.first_page_url = rsp.first_page_url
                                vues.last_page_url = rsp.last_page_url
                                vues.last_page = rsp.last_page
                                vues.prev_page_url = rsp.prev_page_url
                                vues.next_page_url = rsp.next_page_url
                                vues.current_page = rsp.current_page
                                vues.path = rsp.path
                                $("#search-pagginate").val(null);
                            }
                        });
                    }
                },
            },
        }).mount('#app')
    </script>    
@endpush