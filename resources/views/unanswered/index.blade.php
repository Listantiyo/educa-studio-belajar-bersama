@extends('layouts.master')

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
                Unanswered
            </li>
        </ul>

        <form class="aq-form">
            <i class="ri-search-line"></i>
            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
            <button class="aq-btn">
                Ask Question
            </button>
        </form>

        <ul class="nav nav-tabs questions-tabs d-flex justify-content-between" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="recent-questions-tab" data-bs-toggle="tab" data-bs-target="#recent-questions" type="button" role="tab" aria-controls="recent-questions" aria-selected="true">
                    Recent Questions
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="most-answered-tab" data-bs-toggle="tab" data-bs-target="#most-answered" type="button" role="tab" aria-controls="most-answered" aria-selected="false">
                    Most Answered 
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unanswered-question-tab" data-bs-toggle="tab" data-bs-target="#unanswered-question" type="button" role="tab" aria-controls="unanswered-question" aria-selected="false">
                    Unanswered Question
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="featured-question-tab" data-bs-toggle="tab" data-bs-target="#featured-question" type="button" role="tab" aria-controls="featured-question" aria-selected="false">
                    Featured Question
                </button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="recent-questions" role="tabpanel" aria-labelledby="recent-questions-tab">
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-3.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>674</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>4</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Yvonne Cox</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 16 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Conversion
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-4.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>494</span>
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
                                    <a href="user.html">Nelson Koch</a>
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
                                            43 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            4 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            974 Views
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-5.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>974</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>5</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">James Sardina</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 19 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    In the case of a human being, learning how many languages is logical is mentioned
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
                                            35 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            3 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            735 Views
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-6.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>951</span>
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
                                    <a href="user.html">Judith Maddox</a>
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
                                    Why do people of different countries celebrate their New Year in different ways?
                                </a>
                            </h3>

                            <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                            <ul class="tag-list">
                                <li>
                                    <a href="tags.html">Discussion</a>
                                </li>
                                <li>
                                    <a href="tags.html">l
                                        Language</a>
                                </li>
                                <li>
                                    <a href="tags.html">Analytics</a>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="anser-list">
                                    <li>
                                        <a href="polls.html">
                                            32 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            2 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            374 Views
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-7.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>583</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>6</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Rick Thrasher</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 22 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    What is the requirement of a student's e-book for conducting educational activities?
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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-left-line"></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="unanswered.html" class="page-numbers">2</a>
                    <a href="unanswered.html" class="page-numbers">3</a>
                    
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="tab-pane fade" id="most-answered" role="tabpanel" aria-labelledby="most-answered-tab">
                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-1.jpg" alt="Image">
                            </a>
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-2.jpg" alt="Image">
                            </a>
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-3.jpg" alt="Image">
                            </a>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Yvonne Cox</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 16 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Conversion
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-4.jpg" alt="Image">
                            </a>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Nelson Koch</a>
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
                                            43 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            4 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            974 Views
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-5.jpg" alt="Image">
                            </a>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">James Sardina</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 19 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    In the case of a human being, learning how many languages is logical is mentioned
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
                                            35 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            3 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            735 Views
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-6.jpg" alt="Image">
                            </a>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Judith Maddox</a>
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
                                    Why do people of different countries celebrate their New Year in different ways?
                                </a>
                            </h3>

                            <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                            <ul class="tag-list">
                                <li>
                                    <a href="tags.html">Discussion</a>
                                </li>
                                <li>
                                    <a href="tags.html">l
                                        Language</a>
                                </li>
                                <li>
                                    <a href="tags.html">Analytics</a>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="anser-list">
                                    <li>
                                        <a href="polls.html">
                                            32 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            2 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            374 Views
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-7.jpg" alt="Image">
                            </a>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Rick Thrasher</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 22 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    What is the requirement of a student's e-book for conducting educational activities?
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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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

                                <a href="most-answered.html" class="default-btn bg-ea4335">
                                    Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-area">
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-left-line"></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="unanswered.html" class="page-numbers">2</a>
                    <a href="unanswered.html" class="page-numbers">3</a>
                    
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="tab-pane fade show active" id="unanswered-question" role="tabpanel" aria-labelledby="unanswered-question-tab">
                <ul class="unansweredd-list d-flex justify-content-between">
                    <li>
                        <span>Unanswered</span>
                    </li>
                    <li>
                        <span class="unanswerd">65 questions</span>
                    </li>
                </ul>
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-3.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>674</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>4</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Yvonne Cox</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 16 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Conversion
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
                                </a>
                            </h3>

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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-4.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>494</span>
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
                                    <a href="user.html">Nelson Koch</a>
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
                                            43 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            4 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            974 Views
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-5.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>974</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>5</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">James Sardina</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 19 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    In the case of a human being, learning how many languages is logical is mentioned
                                </a>
                            </h3>

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
                                            35 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            3 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            735 Views
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-6.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>951</span>
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
                                    <a href="user.html">Judith Maddox</a>
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
                                    Why do people of different countries celebrate their New Year in different ways?
                                </a>
                            </h3>

                            <ul class="tag-list">
                                <li>
                                    <a href="tags.html">Discussion</a>
                                </li>
                                <li>
                                    <a href="tags.html">l
                                        Language</a>
                                </li>
                                <li>
                                    <a href="tags.html">Analytics</a>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="anser-list">
                                    <li>
                                        <a href="polls.html">
                                            32 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            2 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            374 Views
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

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-7.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>583</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>6</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Rick Thrasher</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 22 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    What is the requirement of a student's e-book for conducting educational activities?
                                </a>
                            </h3>

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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-left-line"></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="unanswered.html" class="page-numbers">2</a>
                    <a href="unanswered.html" class="page-numbers">3</a>
                    
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="tab-pane fade" id="featured-question" role="tabpanel" aria-labelledby="featured-question-tab">
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
                    <span class="featured">Featured</span>
                </div>

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
                    <span class="featured">Featured</span>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-3.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>674</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>4</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Yvonne Cox</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 16 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Conversion
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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
                    <span class="featured">Featured</span>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-4.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>494</span>
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
                                    <a href="user.html">Nelson Koch</a>
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
                                            43 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            4 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            974 Views
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
                    <span class="featured">Featured</span>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-5.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>974</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>5</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">James Sardina</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 19 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    In the case of a human being, learning how many languages is logical is mentioned
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
                                            35 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            3 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            735 Views
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
                    <span class="featured">Featured</span>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-6.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>951</span>
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
                                    <a href="user.html">Judith Maddox</a>
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
                                    Why do people of different countries celebrate their New Year in different ways?
                                </a>
                            </h3>

                            <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                            <ul class="tag-list">
                                <li>
                                    <a href="tags.html">Discussion</a>
                                </li>
                                <li>
                                    <a href="tags.html">l
                                        Language</a>
                                </li>
                                <li>
                                    <a href="tags.html">Analytics</a>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="anser-list">
                                    <li>
                                        <a href="polls.html">
                                            32 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            2 Answer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-visited.html">
                                            374 Views
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
                    <span class="featured">Featured</span>
                </div>

                <div class="single-qa-box like-dislike">
                    <div class="d-flex">
                        <div class="link-unlike flex-shrink-0">
                            <a href="user.html">
                                <img src="assets/images/user/user-7.jpg" alt="Image">
                            </a>

                            <div class="donet-like-list">
                                <button class="like-unlink-count like">
                                    <i class="ri-thumb-up-fill"></i>
                                    <span>583</span>
                                </button>
                            </div>

                            <div class="donet-like-list">
                                <button class="like-unlink-count dislike">
                                <i class="ri-thumb-down-fill"></i>
                                    <span>6</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <ul class="graphic-design">
                                <li>
                                    <a href="user.html">Rick Thrasher</a>
                                </li>
                                <li>
                                    <span>Latest Answer: 22 hours ago</span>
                                </li>
                                <li>
                                    <span>In:</span>
                                    <a href="tags.html" class="graphic">
                                        Language
                                    </a>
                                </li>
                            </ul>

                            <h3>
                                <a href="queations-details.html">
                                    What is the requirement of a student's e-book for conducting educational activities?
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
                                            24 Vote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            1 Answer
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
                    <span class="featured">Featured</span>
                </div>

                <div class="pagination-area">
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-left-line"></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="unanswered.html" class="page-numbers">2</a>
                    <a href="unanswered.html" class="page-numbers">3</a>
                    
                    <a href="unanswered.html" class="next page-numbers">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection