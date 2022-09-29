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

            <div class="education-content">
                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-2.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>774</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                    <i class="ri-thumb-down-fill"></i>
                                    <span>2</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Adam  Garrison</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 15 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Programming
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    Teaching high school students various computer systems is a resource for the future
                                </a>
                            </h3>

                            <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                            <ul class="tag-list">
                                <li>
                                    <a href="tags.html">Discussion</a>
                                </li>
                                <li>
                                    <a href="tags.html">Language</a>
                                </li>
                                <li>
                                    <a href="tags.html">Analytics</a>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="anser-list">
                                    <li>
                                        <a href="polls.html">
                                            2 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            647 Views
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

                                <a href="most-answered.html" class="default-btn">
                                    Answer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-area">
                    <a href="education.html" class="next page-numbers">
                        <i class="ri-arrow-left-line"></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="education.html" class="page-numbers">2</a>
                    <a href="education.html" class="page-numbers">3</a>
                    
                    <a href="education.html" class="next page-numbers">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
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
                }
            },
            mounted() {
                ajax = $.ajax({
                        url: "/api/group/quest/show",
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
        }).mount('#app')
    </script>
@endpush