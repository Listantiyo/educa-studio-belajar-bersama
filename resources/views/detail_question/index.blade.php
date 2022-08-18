<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/metismenu.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('template/pify/assets/css/font-awesome.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/editor.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css.map')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.scss')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/jquerysctipttop.css')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css.map')}}">
        <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.scss')}}">  
        <script src="https://kit.fontawesome.com/7f8292fccf.js" crossorigin="anonymous"></script>
        
        
        <style>
            .single-qa-box {
                border: 1px solid #00000081 !important;
            }

            .Editor-editor {
                height: 270px !important;
            }

            .p-9{
                padding-top: 9%;
                padding-bottom: 9%;
            }

            .img-cmn {
                border-radius: 50px;
                width: 60%;
            }

            .single-qa-box p {
                margin-bottom: 0 !important;
            }

            .foto {
                background-color: grey;

            }
        </style>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Pify - Social Questions & Answers HTML Template</title>
    </head>

    <body>

        <!-- Start Navbar Area --> 
		<div class="navbar-area w-100">
			<div class="mobile-responsive-nav">
				<div class="container">
					<div class="mobile-responsive-menu">
						<div class="logo">
							<a href="index.html">
								<img src="{{asset('assets/images/logo.png')}}" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="desktop-nav">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.html">
							<img src="{{asset('template/pify/assets/images/logo.png')}}" alt="logo">
						</a>

                        <div class="others-options d-flex w-100 justify-content-between">
                            <ul>
                                <li>
                                    <form class="search-box">
                                        <input type="text" name="Search" placeholder="Search for..." class="form-control container-fluid" width="100%">
                                
                                        <button type="submit" class="search-btn">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                            <ul class="me-3">
                                <li>
                                    <a href="#" class="ask-btn" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                        Ajukan Pertanyaan
                                    </a>
                                </li>
                                <li class="mx-4">
                                    <a href="#">
                                        <i class="fa-solid fa-bell fs-5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image" class="rounded-circle">
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- <div class="others-options">
                            <ul>
                                <li>
                                    <a href="#" class="ask-btn">
                                        Ajukan Pertanyaan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-bell"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
					</nav>
				</div>
			</div>

			<div class="others-option-for-responsive">
				<div class="container">
					<div class="dot-menu">
						<div class="inner">
							<div class="circle circle-one"></div>
							<div class="circle circle-two"></div>
							<div class="circle circle-three"></div>
						</div>
					</div>
					
					<div class="container">
						<div class="option-inner">
							<div class="others-options justify-content-center d-flex align-items-center">
								<ul>
									<li>
										<form class="search-box">
											<input type="text" name="Search" placeholder="Search for..." class="form-control">
									
											<button type="submit" class="search-btn">
												<i class="ri-search-line"></i>
											</button>
										</form>
									</li>
									<li>
										<a href="log-in.html" data-bs-toggle="modal" data-bs-target="#exampleModal-3" class="active">
											Log in	
										</a>
									</li>
									<li>
										<a href="sign-up.html" data-bs-toggle="modal" data-bs-target="#exampleModal-4">
											Sign up
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->

        <div class="container ps-5 p-9">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-qa-box card ms-auto" style="width: 85%;">
                        <div class="d-flex">
                            <div class="flex-grow-1 ms-3">
                                <ul class="graphic-design">
                                    <li>
                                        <a>
                                            <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">Mtk</a>
                                    </li>
                                    <li>
                                        <span>14 hours ago</span>
                                    </li>
                                </ul>
                                <h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At qui ex dolorem quod quis laborum est reiciendis, iure asperiores assumenda, modi nobis quibusdam expedita exercitationem eos consectetur alias quo beatae.</p>
                                </h3>
                                <div class="container">
                                    
                                </div>
                                <div class="d-flex bd-highlight align-items-center py-4">
                                    <a href="#" class="bd-highlight view-answer">
                                        <span><span class="answer-number rounded-circle">1</span> LIHAT JAWABAN</span>
                                    </a>
                                    <a href="#" class="bd-highlight answer-btn" data-bs-toggle="modal" data-bs-target="#answerModalToggle">
                                        <span><i class="fa-solid fa-plus"></i> TAMBAHKAN JAWABAN <span class="text-muted ps-3"> +10 poin </span></span>
                                    </a>
                                    <a href="#" class="ms-auto bd-highlight lapor-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Laporkan">
                                        <i class="fa-solid fa-circle-exclamation fs-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="container my-4">
                            <div class="d-flex align-items-center mb-2">
                                <a href="#">
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="img-cmn">
                                </a>
                                <p>Terima kasih</p>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="#">
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="img-cmn">
                                </a>
                                <p>Sama-sama</p>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="#">
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="img-cmn">
                                </a>
                                <p>Ok</p>
                            </div>
                        </div>
                        <input type="text" class="form-control comment" placeholder="Komentar">
                    </div>

                    <div class="mt-5 ms-auto" style="width: 85%;">
                        <h4 class="mb-0">JAWABAN :</h4>
                        <hr>
                    </div>
                    <div class="single-qa-box card mt-3 ms-auto" style="width: 85%;">
                        <div class="d-flex">
                            <div class="flex-grow-1 ms-3">
                                <ul class="graphic-design">
                                    <li>
                                        <a>
                                            <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">Mtk</a>
                                    </li>
                                    <li>
                                        <span>14 hours ago</span>
                                    </li>
                                </ul>
                                <h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus earum consectetur voluptates sequi pariatur! Distinctio porro deserunt dolorem excepturi. Blanditiis voluptatum voluptas hic, animi culpa nemo molestias minus dolorum incidunt.</p>
                                </h3>
                                <div class="d-flex bd-highlight align-items-center py-4">
                                    <a href="#" class="bd-highlight">
                                        <span><i class="fa-solid fa-thumbs-up fs-4"></i> 10 </span>
                                    </a>
                                    <a href="#" class="bd-highlight ms-5">
                                        <span><i class="fa-solid fa-thumbs-down fs-4"></i> 10 </span>
                                    </a>
                                    <a href="#" class="ms-auto bd-highlight lapor-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Laporkan">
                                        <i class="fa-solid fa-circle-exclamation fs-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="container my-4">
                            <div class="d-flex align-items-center mb-2">
                                <a href="#">
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="img-cmn">
                                </a>
                                <p>Terima kasih</p>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="#">
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="img-cmn">
                                </a>
                                <p>Sama-sama</p>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <a href="#">
                                    <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="img-cmn">
                                </a>
                                <p>Ok</p>
                            </div>
                        </div>
                        <input type="text" class="form-control comment" placeholder="Komentar">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-siderbar">
                        <div class="right-sidebar-common">
                            <div class="card me-auto" style="width: 70%;">
                                <div class="container card-body d-flex">
                                    <div class="d-inline">
                                        <img src="template/pify/assets/images/user/user-1.jpg" alt="Image" class="rounded-circle me-3" style="width: 100%;">
                                    </div>
                                    <div class="text-center py-2">
                                        <h6 class="card-title fw-bold mb-0">Anonymous</h6>
                                        <span class="d-block lencana">Gemar menyatir</span>
                                    </div>
                                </div>
                                <div class="container card-body d-flex" style="padding-top: 10px;">
                                    <ul class="list-lencana">
                                        <li>
                                            <span class="lencana">
                                                <i class="fa-solid fa-shield-halved"></i>
                                                Bintang Briliant
                                            </span>
                                        </li>
                                        <li>
                                            <span class="lencana">
                                                <i class="fa-solid fa-shield-halved"></i>
                                                Gratitude Attitude
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#" class="lencana">5+ lebih banyak</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer card-button">
                                    <a href="https://www.gamelab.id" class="d-flex align-items-center">
                                        <p class="d-inline mb-0">Lihat Selengkapnya</p>
                                        <i class="fa-solid fa-chevron-right d-inline" style="padding-left: 40%;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                
                        {{-- <div class="right-siderbar-common">
                            <div class="answer-count">
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span>Questions</span>
                                        <span class="count">435</span>
                                    </li>
                                    <li>
                                        <span>Answers</span>
                                        <span class="count">435</span>
                                    </li>
                                    <li>
                                        <span>Best answers</span>
                                        <span class="count">324</span>
                                    </li>
                                    <li>
                                        <span>Users</span>
                                        <span class="count">2K</span>
                                    </li>
                                    <li>
                                        <span>Posts</span>
                                        <span class="count">852</span>
                                    </li>
                                    <li>
                                        <span>Comments</span>
                                        <span class="count">57</span>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                
                        {{-- <div class="right-siderbar-common">
                            <div id="top-user">
                                <h3>
                                    <i class="ri-discuss-line"></i>
                                    Top members
                                </h3>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                        <span>Yong Spears</span>
                                        <span class="badge bg-primary rounded-pill">293</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                        <span>Denise Jones</span>
                                        <span class="badge bg-primary rounded-pill">280</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                        <span>Dennis Rogers</span>
                                        <span class="badge bg-primary rounded-pill">279</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                        <span>Naomi Barnett</span>
                                        <span class="badge bg-primary rounded-pill">275</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                        <span>Mary Wenger</span>
                                        <span class="badge bg-primary rounded-pill">270</span>
                                    </a>
                                    <div class="extra-top-user list-group list-group-flush collapse">
                                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                            <span>Asep</span>
                                            <span class="badge bg-primary rounded-pill">261</span>
                                        </a>
                                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                            <span>Doeng</span>
                                            <span class="badge bg-primary rounded-pill">258</span>
                                        </a>
                                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                            <span>Mega</span>
                                            <span class="badge bg-primary rounded-pill">253</span>
                                        </a>
                                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                            <span>Wati</span>
                                            <span class="badge bg-primary rounded-pill">240</span>
                                        </a>
                                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                            <img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
                                            <span>Luhut</span>
                                            <span class="badge bg-primary rounded-pill">231</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="container py-3">
                                    <button type="button" class="btn btn-sm d-flex justify-content-center" data-bs-toggle="collapse" data-bs-target="#top-user .extra-top-user, #top-user .toggle-btn">
                                        <span class="toggle-btn collapse show">Tampilkan</span>
                                        <span class="toggle-btn collapse">Sembunyikan</span>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- Start Modal Answer --}}
        <div class="modal fade py-3" id="answerModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-bold" id="exampleModalToggleLabel">Ajukan Pertanyaan</h5>
                  <button type="button" class="btn-close" data-bs-target="#answerModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div class="container">
                            <h4 class="fw-bold">Pertanyaan :</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur placeat ullam ducimus eum ad nulla eaque quod esse molestiae molestias mollitia odio qui, tempora sit rem tempore cupiditate repellendus voluptas?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="height:50%;">
                            <div id="txtEditor"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                  <button class="btn btn-dark fw-bold" style="border-radius: 20px;">TAMBAHKAN JAWABAN</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="answerModalToggle2" aria-hidden="true" aria-labelledby="answerModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
              <div class="modal-content container p-3 py-4">
                <div class="modal-body row">
                    <h5 class="fw-bold">Kamu yakin ingin berhenti menjawab pertanyaan ini ?</h5>
                    <p>Ketika kamu berhenti, orang lain dapat menjawab pertanyaan ini!</p>
                    <div class="col-sm-6">
                        <button class="btn btn-dark" style="border-radius: 20px;" data-bs-target="#answerModalToggle" data-bs-toggle="modal">LANJUT MENJAWAB</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-light" style="border-radius: 20px;" data-bs-dismiss="modal" aria-label="Close">TANYAKAN NANTI</button> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        {{-- End Modal Answer --}}

        <!-- Links of JS File -->
        <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/jquery.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/editor.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/like-dislike.min.js')}}"></script>
        <script src="{{asset('template/pify/assets/js/custom.js')}}"></script>
    </body>
</html>