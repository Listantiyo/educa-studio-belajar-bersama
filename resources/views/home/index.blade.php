@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1>Pify</h1>
                    <h3>Share & grow the world's <span>knowledge</span>!</h3>
                    <p>We want to connect with people who will share their knowledge from one person to another.</p>
                    <a href="user.html" class="default-btn">
                        Create a free team
                    </a>
                </div>
            </div>

            <div class="col-lg-6 pe-0">
                <div class="banner-img">
                    <img src="assets/images/banner/banner-img.png" alt="Image">
                    <img src="assets/images/banner/shape-1.png" alt="Image" class="shape shape-1">
                    <img src="assets/images/banner/shape-2.png" alt="Image" class="shape shape-2">
                    <img src="assets/images/banner/shape-3.png" alt="Image" class="shape shape-3">
                    <img src="assets/images/banner/shape-4.png" alt="Image" class="shape shape-4">
                    <img src="assets/images/banner/shape-5.png" alt="Image" class="shape shape-5">
                    <img src="assets/images/banner/shape-6.png" alt="Image" class="shape shape-6">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->

<!-- Start Monthly User Area -->
<div class="monthly-user-area">
    <div class="container">
        <div class="monthly-user-bg pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-monthly-item">
                        <h3>10+ million</h3>
                        <span>Monthly visitors to our network</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-monthly-item">
                        <h3>2 Million</h3>
                        <span>Questions asked to-date</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-monthly-item">
                        <h3>1000+</h3>
                        <span>Customer companies for all products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Monthly User Area -->

<!-- Start Why Choose Us Area -->
<div class="why-choose-us-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="why-choose-img">
                    <img src="assets/images/choose-img.png" alt="Image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="why-choose-content">
                    <span class="top-title">Why choosing Pify</span>
                    <h2>The main reason why you choose it is that we share our knowledge at the doorsteps of the world</h2>
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec sollicitudin molestie malesuada.</p>

                    <ul>
                        <li>
                            <h3>First priority customer mindset</h3>
                            <p>Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus.</p>
                        </li>
                        <li>
                            <h3>Be transparent</h3>
                            <p>Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slide owl-carousel owl-theme">
            <div class="partner-item">
                <img src="assets/images/partner/partner-1.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/images/partner/partner-2.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/images/partner/partner-3.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/images/partner/partner-4.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/images/partner/partner-5.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/images/partner/partner-6.png" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start team Area -->
<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our leadership team</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="assets/images/team/team-1.jpg" alt="Image">
                    <h3>Guillermo Brand</h3>
                    <span>CEO</span>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="ri-twitter-line"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>

                        <li>
                            <button class="default-btn">Follow</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="assets/images/team/team-2.jpg" alt="Image">
                    <h3>Phyllis Cassidy</h3>
                    <span>Writer</span>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="ri-twitter-line"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>

                        <li>
                            <button class="default-btn">Follow</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="assets/images/team/team-3.jpg" alt="Image">
                    <h3>Ian Martin</h3>
                    <span>Manager</span>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="ri-twitter-line"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>

                        <li>
                            <button class="default-btn">Follow</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="single-team-item">
                    <img src="assets/images/team/team-4.jpg" alt="Image">
                    <h3>Regina Mccloy</h3>
                    <span>Writer</span>
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="ri-twitter-line"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>

                        <li>
                            <button class="default-btn">Follow</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End team Area -->

@endsection