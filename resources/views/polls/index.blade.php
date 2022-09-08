@extends('ARemake.layouts.master')

@section('content')
<div class="col-lg-6">
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
            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
            <button class="aq-btn">
                Ask Question
            </button>
        </form>

        <div class="polls-content">
            <div class="single-qa-box like-dislike">
                <div class="d-flex">
                    <div class="link-unlike flex-shrink-0">
                        <a href="user.html">
                            <img src="assets/images/user/user-1.jpg" alt="Image">
                        </a>

                        <div class="donet-like-list">
                            <button class="like-unlink-count like">
                                <i class="ri-thumb-up-fill"></i>
                                <span>4974</span>
                            </button>
                        </div>

                        <div class="donet-like-list">
                            <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                <span>25</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <ul class="graphic-design">
                            <li>
                                <a href="user.html">Teresa Klein</a>
                            </li>
                            <li>
                                <span>Latest Answer: 14 hours ago</span>
                            </li>
                            <li>
                                <span>In:</span>
                                <a href="tags.html" class="graphic">
                                    Graphic design
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="queations-details.html">
                                If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
                            </a>
                        </h3>

                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

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
                                        24 Vote
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


            <div class="pagination-area">
                <a href="polls.html" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="polls.html" class="page-numbers">2</a>
                <a href="polls.html" class="page-numbers">3</a>
                
                <a href="polls.html" class="next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection