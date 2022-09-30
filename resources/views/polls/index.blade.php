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
            <li class="active">
                Polls
            </li>
        </ul>

        <form class="aq-form">
            <i class="ri-search-line"></i>
            <input id="searchbar" type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
            <button id="search-button" class="aq-btn">
                Ask Question
            </button>
        </form>

        <div class="polls-content">
            <div v-for="item in quest_voted" class="ps-2 single-qa-box like-dislike">
                <div class="p-2 row">
                    <div class="col-2 pe-md-0 pe-sm-3 link-unlike flex-shrink-0">
                        <a v-if="item.user_detail === null" href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                        </a>
                        <a v-else  href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" class="mb-3 px-0" :src="'storage/'+item.user_detail.path_img" alt="oi">
                        </a>

                        <div class="mt-md-2 mt-sm-4 donet-like-list">
                            <button class="like-unlink-count active  like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>@{{item.likes_count}}</span>
                            </button>
                        </div>

                        <div class="mt-md-2 mt-sm-3 donet-like-list">
                            <button class="like-unlink-count active  dislike">
                                <i class="ri-thumb-down-fill"></i>
                                <span>@{{item.dislikes_count}}</span>
                            </button>
                        </div>
                    </div>

                    <div class=" col-9 ps-0 pe-4 flex-grow-1 ms-3 text-md-justify " style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a type="text">@{{item.user.name}}</a>
                            </li>
                            <li class="me-5" style="visibility: hidden;">
                                <span>Latest Answer: 14 hours ago</span>
                            </li>
                            <li>
                                <span>In : </span>
                                <a v-if="item.community === null" href="tags.html" class="graphic">
                                    Public
                                </a>
                                <a v-else href class="graphic">
                                    @{{item.community.community}}
                                </a>
                            </li>
                        </ul>

                        <div>
                            <h3 style="word-break: break-word;" >
                                <a href @click="toAnswer(item.id)">
                                   @{{item.title}}
                                </a>
                            </h3>
    
                            <p style="display: inline-block;word-break: break-word;" v-html="item.question.length < 100 ? item.question : item.question.substring(0,250)+'...'"></p>
                        </div>

                        <div class="row mb-4 px-3" style="max-width: 100%;">
                            <a href="" v-for="tag in item.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                                <i class="">#@{{tag.tag}}</i>
                            </a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        @{{item.votes_count}} Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-answered.html">
                                        @{{item.answers_count}} Answer
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        @{{item.views}} Views
                                    </a>
                                </li>
                                <li>
                                    <ul class="qa-share">
                                        <li class="share-option">
                                            <span>
                                                <i class="ri-share-fill"></i>
                                            </span>
                                            
                                            <ul class="social-icon">
                                                <li>
                                                    <a @click="copyPath(item.id)">
                                                        <i class="ri-file-copy-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="" @click="toAnswer(quest.id)" class="default-btn">
                                Answer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
             @include('question.pagginate')
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const vues = Vue.createApp({
            data() {
                return {
                    quest_voted:'',
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
                    url: "api/quest/vote/show",
                    data: "data",
                    success: function (rsp) {
                        vues.quest_voted = rsp.quest_voted.data
                        vues.first_page_url = rsp.quest_voted.first_page_url
                        vues.last_page_url = rsp.quest_voted.last_page_url
                        vues.prev_page_url = rsp.quest_voted.prev_page_url
                        vues.next_page_url = rsp.quest_voted.next_page_url
                        vues.last_page = rsp.quest_voted.last_page
                        vues.current_page = rsp.quest_voted.current_page
                        vues.path = rsp.quest_voted.path
                    }
                   }); 

                // SearchBar
				$("#searchbar").keypress(function (e) { 
                    
                    if (e.which == 13) {
						e.preventDefault(); 
                        
                        var input = $("#searchbar").val();
                        var id = vues.id;
                        let ini = 'vote'
                        $.get("/api/quest/search", {data:input,id:id,ini:ini},
                            function (rsp) {           

                                vues.quest = rsp.quest_voted.data ;
                                vues.first_page_url = rsp.quest_voted.first_page_url
                                vues.last_page_url = rsp.quest_voted.last_page_url
                                vues.last_page = rsp.quest_voted.last_page
                                vues.prev_page_url = rsp.quest_voted.prev_page_url
                                vues.next_page_url = rsp.quest_voted.next_page_url
                                vues.current_page = rsp.quest_voted.current_page
                                vues.path = rsp.quest_voted.path

                                $("#searchbar").val(null);

                            },

                        );
                    }
                });
                // search button
                $("#search-button").click(function (e) { 
                    e.preventDefault();

                    var input = $("#searchbar").val();
                    let ini = 'vote';
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id,ini:ini},
                            function (rsp) {           

                                vues.quest = rsp.quest_voted.data ;
                                vues.first_page_url = rsp.quest_voted.first_page_url
                                vues.last_page_url = rsp.quest_voted.last_page_url
                                vues.last_page = rsp.quest_voted.last_page
                                vues.prev_page_url = rsp.quest_voted.prev_page_url
                                vues.next_page_url = rsp.quest_voted.next_page_url
                                vues.current_page = rsp.quest_voted.current_page
                                vues.path = rsp.quest_voted.path


                                $("#searchbar").val(null);

                            },

                        );
                    
                });
                });
            },
            methods: {
                toAnswer(id){
                    $(document).ready(function () {
                        
                        let url = "{{route('questions-details',':id')}}"
                        url = url.replace(':id',id)
                        alert(url)
                        location.href = url;
                    });
                },
                copyPath(id){
                alert(id)
                    let Url = "{{route('questions-details',':id')}}"
                    urI = Url.replace(':id',id)
                    alert(urI)
                    setTimeout(async()=>console.log(
                        await window.navigator.clipboard.writeText(urI)), 1000)
                },
                // pagginate button
                pagginate(url){
                    console.log(url);
                    let type = vues.id
                    $.ajax({
                        type: "GET",
                        contentType: "application/json",
                        data:{id:type},
                        dataType: "json",
                        url: url,
                        success: function (rsp) {
                            console.log(rsp);   

                                vues.quest = rsp.quest_voted.data ;
                                vues.first_page_url = rsp.quest_voted.first_page_url
                                vues.last_page_url = rsp.quest_voted.last_page_url
                                vues.last_page = rsp.quest_voted.last_page
                                vues.prev_page_url = rsp.quest_voted.prev_page_url
                                vues.next_page_url = rsp.quest_voted.next_page_url
                                vues.current_page = rsp.quest_voted.current_page
                                vues.path = rsp.quest_voted.path


                        }
                    });
                },
                // search-pagginate
                searchPagginate(url){
                    var url = url+'?page='
                    let num = $("#search-pagginate").val();
                    let type = vues.id
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
                            data:{id:type},
                            dataType: "json",
                            url: url+num,
                            success: function (rsp) {
                                scrollToTop() 
                                console.log(rsp);   
                            
                                vues.quest = rsp.quest_voted.data ;
                                vues.first_page_url = rsp.quest_voted.first_page_url
                                vues.last_page_url = rsp.quest_voted.last_page_url
                                vues.last_page = rsp.quest_voted.last_page
                                vues.prev_page_url = rsp.quest_voted.prev_page_url
                                vues.next_page_url = rsp.quest_voted.next_page_url
                                vues.current_page = rsp.quest_voted.current_page
                                vues.path = rsp.quest_voted.path

                                $("#search-pagginate").val(null);
                            }
                        });
                    }
                },
            },
        }).mount('#app')
    </script>
@endpush