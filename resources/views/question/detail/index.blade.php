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
             
                 <div class="question-details-content like-dislike">
                     <div class="d-flex">
                         <div class="link-unlike flex-shrink-0">
                             <a href="user.html">
                                 <img src="assets/images/user/user-1.jpg" alt="Image">
                             </a>
 
                             <div class="donet-like-list">
                                 <button class="like-unlink-count like">
                                     <i class="ri-thumb-up-fill"></i>
                                     <span>{{$question->like}}</span>
                                 </button>
                             </div>
 
                             <div class="donet-like-list">
                                 <button class="like-unlink-count dislike">
                                     <i class="ri-thumb-down-fill"></i>
                                     <span>{{$question->dislike}}</span>
                                 </button>
                             </div>
                         </div>
 
                         <div class="flex-grow-1 ms-3">
                             <ul class="graphic-design">
                                 <li>
                                     <a href="user.html">Teresa Klein{{$question->id_user_dil}}</a>
                                 </li>
                                 <li>
                                     <span>Latest Answer: 14 hours ago</span>
                                 </li>
                                 <li>
                                     <span>In:</span>
                                     <a href="" class="graphic">
                                         Graphic design{{$question->id_community}}
                                     </a>
                                 </li>
                             </ul>
 
                             <h3>
                                 <a>
                                     {{$question->title}}
                                 </a>
                             </h3>
 
                             <p>{!! html_entity_decode($question->question) !!}</p>
 
                             <ul class="tag-list">
                                 <li>
                                     <a href="tags.html">Discussion</a>
                                 </li>
                                 <li>
                                     <a href="tags.html">Photoshop</a>
                                 </li>
                                 <li>
                                     <a href="tags.html">Analytics</a>
                                 </li>
                             </ul>
 
                             <div class="d-flex justify-content-between align-items-center">
                                 <ul class="anser-list">
                                     <li>
                                         <a href="polls.html">
                                             {{$question->votes}} Votes
                                         </a>
                                     </li>
                                     <li>
                                         <a href="most-answered.html">
                                             2 Answer
                                         </a>
                                     </li>
                                     <li>
                                         <a href="most-visited.html">
                                             658 Views
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
             

                <ul class="answerss d-flex justify-content-between align-items-center">
                    <li>
                        <h3>2 Answers</h3>
                    </li>
                    <li>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>All answer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </li>
                </ul>

                <div class="answer-question-details like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-13.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>197</span>
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
                            <ul class="latest-answer-list">
                                <li>
                                    <a href="user.html">Elsa Feldman</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 2 hours ago</span>
                                </li>
                                <li class="reports">
                                    <a href="referrals.html" class="report">
                                        <i class="ri-error-warning-line"></i>
                                        Report
                                    </a>
                                </li>
                            </ul>

                            <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada Donec velit neque.</p>

                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </div>
                    </div>
                </div>

                <div class="answer-question-details like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-14.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>84</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                    <i class="ri-thumb-down-fill"></i>
                                    <span>1</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="latest-answer-list">
                                <li>
                                    <a href="user.html">Lance Loftis</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 5 hours ago</span>
                                </li>
                                <li class="reports">
                                    <a href="referrals.html" class="report">
                                        <i class="ri-error-warning-line"></i>
                                        Report
                                    </a>
                                </li>
                            </ul>

                            <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada Donec velit neque.</p>

                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </div>
                    </div>
                </div>

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