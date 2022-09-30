<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget style-two">
                    <a href="index.html">
                        <img src="{{asset('pify/assets/images/logo.png')}}" alt="Image">
                    </a>

                    <p>Pify is a question and answer website for online website users, pify provides a ask feature to ask questions and an answer feature to answer questions</p>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6">
                <div class="single-footer-widget style-two ml-15">
                    <h3>Company</h3>

                    <ul class="import-link">
                        <li>
                            <a href="{{route('about-us')}}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}">Contact us</a>
                        </li>
                        {{-- <li>
                            <a href="blog.html">Blog</a>
                        </li> --}}
                        <li>
                            <a href="#">User</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6">
                <div class="single-footer-widget style-two">
                    <h3>Explore</h3>

                    <ul class="import-link">
                        @auth
                            
                        <li>
                            <a href="{{route('ask-questions')}}">Ask question</a>
                        </li>
                        @endauth
                        @guest
                            
                        <li>
                            <a href="{{route('menu')}}">Ask question</a>
                        </li>
                        @endguest
                        <li>
                            <a href="{{route('faq')}}">FAQs</a>
                        </li>
                        {{-- <li>
                            <a href="privacy-policy.html">Privacy policy</a>
                        </li>
                        <li>
                            <a href="terms-conditions.html">Terms & Conditions</a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            {{-- <div class="col-lg-2 col-sm-6">
                <div class="single-footer-widget style-two">
                    <h3>Follow us</h3>

                    <ul class="import-link">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">Linkedin</a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div> --}}

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget style-two">
                    <h3>Contact Us</h3>

                    <ul class="address-link">
                        <li>
                            <span>Call:</span>
                            <a href="tel:+1-719-504-1984">+1 719-504-1984</a>
                        </li>
                        <li>
                            <span>Email:</span>
                            <a href="mailto:pify@gmail.com">pify@gmail.com</a>
                        </li>
                        <li>
                            <span>Address:</span>
                            Jl. Kalisombo No.18, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50711
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{asset('pify/assets/images/footer-shape.png')}}" alt="Image">
    </div>
</div>

<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-content">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <p>© Pify is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme.com</a></p>
                </div>
                <div class="col-lg-6 col-md-4">
                    {{-- <div class="language">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Language</option>
                            <option value="1">English</option>
                            <option value="2">Arabic</option>
                            <option value="3">Germany</option>
                        </select>
                        <i class="ri-global-line"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>