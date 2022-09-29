<div class="question-details-content like-dislike">
    <div class="p-2 row">
        <div class="col-2 pe-md-0 pe-sm-3 link-unlike flex-shrink-0">
            <a style="margin-bottom: 110%;" href="user.html">
                <img style="max-width: 55px; height:auto;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
            </a>

            <div class="mt-md-4 mt-sm-5 donet-like-list">
                <button class="like-unlink-count quest-link like" name="like" value="like" >
                    <i class="ri-thumb-up-fill"></i>
                    <span>{{$question->like}}</span>
                </button>
            </div>

            <div class="mt-md-3 mt-sm-4 donet-like-list">
                <button class="like-unlink-count quest-link dislike" name="dislike" value="dislike" >
                    <i class="ri-thumb-down-fill"></i>
                    <span>{{$question->dislike}}</span>
                </button>
            </div>
        </div>

        <div class="pt-3 col-9 ps-0 pe-4 flex-grow-1 ms-3 text-md-justify row" style="max-width: 100%">
            <ul class="graphic-design">
                <li>
                    <a href="user.html">Nama = {{$question->id_user_dil}}</a>
                </li>
                <li class="me-5" style="visibility: hidden;">
                    <span>Latest Answer: 14 hours ago</span>
                </li>
                <li>
                    <span>In:</span>
                    <a href="" class="graphic">
                        Graphic design{{$question->id_community}}
                    </a>
                </li>
            </ul>

            <h3 class="mt-4" style="display: inline-block;word-break: break-word;" >
                <a>
                    {{$question->title}}
                </a>
            </h3>
            @if ($question->path_img === null)
                
            @else
                
            <img class="mb-3 px-0" src="{{asset('storage/'.$question->path_img)}}" alt="{{$question->image}}">
            @endif

            <p class="col-12 mt-4" style="word-wrap:break-word">{!! $question->question !!}</p>

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
                    <li id="vote-container">
                        <a class="btn bg-info " id="votes" style="color: white" type="button" >
                            <b> {{$question->votes}} Votes </b>
                        </a>
                    </li>
                    <li>
                    <b>
                        <p type="text" style="color: #f48225;">
                            2 Answer 
                        </p>
                    </b> 
                    </li>
                    <li>
                    <b>
                        <p type="text" style="color: #f48225;">
                            658 Views
                        </p>
                    </b>
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

                <a id="buttons" type="button" class="default-btn">
                    Answer
                </a>
            </div>
        </div>
    </div>
</div>