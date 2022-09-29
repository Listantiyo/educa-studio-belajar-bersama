
<div class="middull-content">
    {{-- search bar --}}
    <form class="aq-form">
        <i class="ri-search-line"></i>
        <input id="searchbar" type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
        <button id="search-button" class="aq-btn">
            Ask Question
        </button>       
    </form>

    <ul class="nav nav-tabs questions-tabs d-flex justify-content-between" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" @click="filterQuest(1)" id="recent-questions-tab" data-bs-toggle="tab" data-bs-target="#recent-questions" type="button" role="tab" aria-controls="recent-questions" aria-selected="true">
                Recent Questions
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" @click="filterQuest(2)" id="most-answered-tab" data-bs-toggle="tab" data-bs-target="#most-answered" type="button" role="tab" aria-controls="most-answered" aria-selected="false">
                Most Answered 
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" @click="filterQuest(3)" id="unanswered-question-tab" data-bs-toggle="tab" data-bs-target="#unanswered-question" type="button" role="tab" aria-controls="unanswered-question" aria-selected="false">
                Unanswered Question
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" @click="filterQuest(4)" id="featured-question-tab" data-bs-toggle="tab" data-bs-target="#featured-question" type="button" role="tab" aria-controls="featured-question" aria-selected="false">
                Featured Question
            </button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

{{--recent-questions  --}}
        <div class="tab-pane fade show active" id="recent-questions" role="tabpanel" aria-labelledby="recent-questions-tab">
            <div v-for="quest in quest" class="ps-2 single-qa-box like-dislike">
                <div class="p-2 row">
                    <div class="col-2 pe-md-0 pe-sm-3 link-unlike flex-shrink-0">

                        <a v-if="quest.user_detail === null" href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                        </a>
                        <a v-else  href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" class="mb-3 px-0" :src="'storage/'+quest.user_detail.path_img" alt="oi">
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
                            <li>
                                <span>In : </span>
                                <a v-if="quest.community === null" href="tags.html" class="graphic">
                                    Public
                                </a>
                                <a v-else href class="graphic">
                                    @{{quest.community.community}}
                                </a>
                            </li>
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

{{-- most-answered --}}
        <div class="tab-pane fade" id="most-answered" role="tabpanel" aria-labelledby="most-answered-tab">
            <div v-for="questmo in quest_most" class="ps-2 single-qa-box like-dislike">
                <div class="p-2 row">
                    <div class="col-2 pe-md-0 pe-sm-3  link-unlike flex-shrink-0">
                        <a v-if="questmo.user_detail === null" href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                        </a>
                        <a v-else  href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" class="mb-3 px-0" :src="'storage/'+questmo.user_detail.path_img" alt="oi">
                        </a>
                    </div>

                    <div class=" col-9 ps-0 pe-4 flex-grow-1 ms-3 text-md-justify " style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">@{{questmo.user.name}}</a>
                            </li>
                            {{-- <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li> --}}
                            <li>
                                <span>In : </span>
                                <a v-if="questmo.community === null" href="tags.html" class="graphic">
                                    Public
                                </a>
                                <a v-else href class="graphic">
                                    @{{questmo.community.community}}
                                </a>
                            </li>
                        </ul>

                        <div style="max-width: 100%">
                            <h3 style="word-wrap:break-word">
                                <a href @click="toAnswer(questmo.id)">
                                    @{{questmo.title}}
                                </a>
                            </h3>

                            <p style="word-wrap:break-word" v-html="questmo.question.length < 100 ? questmo.question : questmo.question.substring(0,250)+'...'"></p>
                        </div>

                        <div class="row mb-4 px-3" style="max-width: 100%;">
                            <a href="" v-for="tag in questmo.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                                <i class="">#@{{tag.tag}}</i>
                            </a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        @{{questmo.votes_count}} Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-answered.html">
                                        @{{questmo.answers_count}} Answer
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        @{{questmo.views}} Views
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
                                                    <a @click="copyPath(questmo.id)">
                                                        <i class="ri-file-copy-line"></i>
                                                    </a>
                                                </li>                                            
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="" @click="toAnswer(questmo.id)" class="default-btn bg-ea4335">
                                Question
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('question.pagginate')
        </div>

{{-- unanswered-question  --}}
        <div class="tab-pane fade" id="unanswered-question" role="tabpanel" aria-labelledby="unanswered-question-tab">
            <div v-for="questun in quest_unans" class="ps-2 single-qa-box like-dislike">
                <div class="p-2 row">
                    <div class="col-2 pe-md-0 pe-sm-3  link-unlike flex-shrink-0">
                        <a v-if="questun.user_detail === null" href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                        </a>
                        <a v-else  href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" class="mb-3 px-0" :src="'storage/'+questun.user_detail.path_img" alt="oi">
                        </a>

                        <div class="mt-md-2 mt-sm-4 donet-like-list">
                            <button class="like-unlink-count like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>@{{questun.likes_count}}</span>
                            </button>
                        </div>

                        <div class="mt-md-2 mt-sm-3 donet-like-list">
                            <button class="like-unlink-count dislike">
                            <i class="ri-thumb-down-fill"></i>
                                <span>@{{questun.dislikes_count}}</span>
                            </button>
                        </div>
                    </div>

                <div class=" col-9 ps-0 pe-4 flex-grow-1 ms-3 text-md-justify " style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">@{{questun.user.name}}</a>
                            </li>
                            {{-- <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li> --}}
                            <li>
                                <span>In : </span>
                                <a v-if="questun.community === null" href="tags.html" class="graphic">
                                    Public
                                </a>
                                <a v-else href class="graphic">
                                    @{{questun.community.community}}
                                </a>
                            </li>
                        </ul>

                        <div style="max-width: 100%">
                            <h3 style="word-wrap:break-word">
                                <a href="" @click="toAnswer(questun.id)">
                                    @{{questun.title}}
                                </a>
                            </h3>
                        </div>

                        <div class="row mb-4 px-3" style="max-width: 100%;">
                            <a href="" v-for="tag in questun.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                                <i class="">#@{{tag.tag}}</i>
                            </a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a href="polls.html">
                                        @{{questun.votes_count}} Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        @{{questun.views}} Views
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
                                                    <a @click="copyPath(questun.id)">
                                                        <i class="ri-file-copy-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="" @click="toAnswer(questun.id)" class="default-btn">
                                Answer
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('question.pagginate')
        </div>

{{-- featured-question --}}
        <div class="tab-pane fade" id="featured-question" role="tabpanel" aria-labelledby="featured-question-tab">
            <div v-for="questfe in quest_featur" class="ps-2 single-qa-box like-dislike">
                <div class="p-2 row">
                    <div class="col-2 pe-md-0 pe-sm-3  link-unlike flex-shrink-0">
                        <a v-if="questfe.user_detail === null" href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" src="{{asset('pify/assets/images/user/user.jpeg')}}" alt="Image">
                        </a>
                        <a v-else  href="{{route('user-profile')}}">
                            <img style="max-width: 55px; height:55px;" class="mb-3 px-0" :src="'storage/'+questfe.user_detail.path_img" alt="oi">
                        </a>

                        <div class="mt-md-2 mt-sm-4 donet-like-list">
                            <button class="like-unlink-count like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>@{{questfe.likes_count}}</span>
                            </button>
                        </div>

                        <div class="mt-md-2 mt-sm-3 donet-like-list">
                            <button class="like-unlink-count dislike">
                            <i class="ri-thumb-down-fill"></i>
                                <span>@{{questfe.dislikes_count}}</span>
                            </button>
                        </div>
                    </div>

                    <div class=" col-9 ps-0 pe-4 flex-grow-1 ms-3 text-md-justify " style="max-width: 100%">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">@{{questfe.user.name}}</a>
                            </li>
                            {{-- <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li> --}}
                            <li>
                                <span>In : </span>
                                <a v-if="questfe.community === null" href="tags.html" class="graphic">
                                    Public
                                </a>
                                <a v-else href class="graphic">
                                    @{{questfe.community.community}}
                                </a>
                            </li>
                        </ul>

                        <div style="max-width: 100%">
                            <h3 style="word-wrap:break-word">
                                <a href @click="toAnswer(questfe.id)">
                                    @{{questfe.title}}
                                </a>
                            </h3>

                            <p style="word-wrap:break-word" v-html="questfe.question.length < 100 ? questfe.question : questfe.question.substring(0,250)+'...'"></p>
                        </div>
                        
                        <div class="row mb-4 px-3" style="max-width: 100%;">
                            <a href="" v-for="tag in questfe.tag" style="font-size: 90%; width: 50%;"  class="text-center border col mt-2 me-1  p-2">
                                <i class="">#@{{tag.tag}}</i>
                            </a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="anser-list">
                                <li>
                                    <a id="vote" href="polls.html">
                                        @{{questfe.votes_count}} Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="most-answered.html">
                                        @{{questfe.answers_count}} Answer
                                    </a>
                                </li>
                                <li>
                                    <a href="most-visited.html">
                                        @{{questfe.views}} Views
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
                                                    <a @click="copyPath(questfe.id)">
                                                        <i class="ri-file-copy-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="" @click="toAnswer(questfe.id)" class="default-btn">
                                Answer
                            </a>
                        </div>
                    </div>
                </div>
                <span class="featured">Featured</span>
            </div>

            @include('question.pagginate')
        </div>
    </div>
</div>
