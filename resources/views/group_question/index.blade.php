@extends('layouts.master')

@section('banner')
		<!-- Start Page title Area -->
		<div class="page-title-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-3">
						<div class="page-title-content">
							<h2>{{$detail->group}}</h2>
						</div>
					</div>

					<div class="col-lg-6 col-md-9">
						<div class="page-title-content-list">
							<ul>
								<li>
									<a href="all-queations.html">6 Questions</a>
								</li>
								<li>
									<a href="best-answered.html">2 Answers</a>
								</li>
								<li>
									<a href="user-profile.html">486 Followers</a>
								</li>
								<li>
									<a href="user-profile.html">Follow</a>
								</li>
								<li>
									<ul class="qa-share">
										<li class="share-option">
											<span>
												<i class="ri-share-fill"></i>
											</span>
											
											<ul class="social-icon">
												<li>
													<a href="https://www.facebook.com/" target="_blank">
														<i class="ri-facebook-fill"></i>
													</a>
												</li>
												<li>
													<a href="https://www.twitter.com/" target="_blank">
														<i class="ri-twitter-line"></i>
													</a>
												</li>
												<li>
													<a href="https://www.linkedin.com/" target="_blank">
														<i class="ri-linkedin-fill"></i>
													</a>
												</li>
												<li>
													<a href="https://www.instagram.com/" target="_blank">
														<i class="ri-instagram-line"></i>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page title Area -->
@endsection
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
                <li class="active">
                    Education
                </li>
            </ul>

            <form class="aq-form">
                <i class="ri-search-line"></i>
                <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
                <button class="aq-btn">
                    Ask Question
                </button>
            </form>

            <div class="tab-pane fade show active" id="recent-questions" role="tabpanel" aria-labelledby="recent-questions-tab">
                <div v-for="quest in quest" class="ps-2 single-qa-box like-dislike">
                    <div class="p-2 row">
                        <div class="col-2 pe-md-0 pe-sm-3 link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img style="max-width: 55px; height:auto;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                            </a>
    
                            <div class="mt-md-2 mt-sm-4 donet-like-list">
                                <button class="like-unlink-count like active">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>@{{quest.likes_count}}</span>
                                </button>
                            </div>
    
                            <div class="mt-md-2 mt-sm-3 donet-like-list">
                                <button class="like-unlink-count dislike active">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>@{{quest.dislikes_count}}</span>
                                </button>
                            </div>
                        </div>
    
                        <div class=" col-9 ps-0 pe-4 flex-grow-1 ms-3 text-md-justify " style="max-width: 100%">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">@{{quest.user.name}}</a>
                                </li>
                                {{-- <li>
                                    <span>@{{quest.created_at}}</span>
                                </li> --}}
                            </ul>
                            
                            <div>
                                <h3 style="word-break: break-word;" >
                                    <a href @click="toAnswer(quest.id)">
                                        @{{quest.title}}
                                    </a>
                                </h3>
    
                                <p style="display: inline-block;word-break: break-word;" v-html="quest.question.length < 100 ? quest.question : quest.question.substring(0,250)+'...'"></p>
                            </div>
    
                            <div class="row mb-4 px-3" style="max-width: 100%;">
                                <a href="" v-for="tag in quest.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                                    <i class="">#@{{tag.tag}}</i>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="anser-list">
                                    <li>
                                        <a href="polls.html">
                                            @{{quest.votes_count}} Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            @{{quest.answers_count}} Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            @{{quest.views}} Views
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
                                                        <a @click="copyPath(quest.id)">
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
        $("#side-community").remove();
        let id_group = {{$id}}
        let url = '/groups/ask/'+id_group
        $("#ask-question-n").attr("href",url);
        function scrollToTop() {
        window.scrollTo(0, 0);
        }
    </script>
    <script>
        const vues = Vue.createApp({
            data() {
                return {
                    quest :'',
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
                    $.ajax({
                        url: "\\api/group/quest/show",
                        data: {id_group:id_group},
                        success: function(rsp){
                            
                            vues.id = rsp.id ;
                            
                            vues.quest = rsp.data ;
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
            methods: {
            toAnswer(id){
                $(document).ready(function () {
                    
                    // let url = "{{url('groups-quest-detail/')}}"+id+"/"+id_group
                    // url = url.replace(':id',id)
                    // url = url.replace(':idg',id_group)
                    var url = "{{ route('groups-quest-detail', ['"+id "','"+id_group"']) }}"
                    alert(url)
                    location.href = url;
                });
            },
            copyPath(id){
                alert(id)
                    let Url = "{{route('groups-quest-detail',':id')}}"
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

                            vues.id = rsp.id ;

                            if (rsp.id === '1') {
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                        }
                    }
                })
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

                            vues.id = rsp.id ;

                            if (rsp.id === '1') {
                            vues.quest = rsp.question_all.data ;
                            vues.first_page_url = rsp.question_all.first_page_url
                            vues.last_page_url = rsp.question_all.last_page_url
                            vues.last_page = rsp.question_all.last_page
                            vues.prev_page_url = rsp.question_all.prev_page_url
                            vues.next_page_url = rsp.question_all.next_page_url
                            vues.current_page = rsp.question_all.current_page
                            vues.path = rsp.question_all.path
                            }
                        }
                    })
                }
            } 
            }  
        }).mount('#app')
    </script>

@endpush