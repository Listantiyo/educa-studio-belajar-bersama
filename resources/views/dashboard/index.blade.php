@extends('layouts.master')   

@section('content')


<style>
	.nav-link{
		color: #0c0d0e;
	}

	.nav-link:hover {
		color: #0c0d0e;
	}

	.nav-pills .nav-link.active,.nav-pills .show>.nav-link{
		background-color: #ebf2f7 !important;
		color: #0c0d0e;
		border-radius: 10px;
	}

	.font-bold{
		font-weight: 700;
	}

</style>

	<div>


		<!-- Start Mail Content Area -->
		<div class="main-content-area py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="align-items-center">
							<h5 class="d-inline ms-4">Mapel</h5>
							<a class="d-inline ms-5">
								<i class="fa-solid fa-gear fs-5"></i>
							</a>
						</div>
						<hr>
						<div class="d-flex align-items-start ms-1">
							<ul class="nav flex-column questions-tab nav-pills" id="myTab" role="tablist">
								{{-- <li>
									<h4>Mapel</h4>
									<hr>
								</li> --}}
								<li class="nav-item" role="presentation">
									<button class="nav-link font-bold active" id="recent-questions-tab" data-bs-toggle="tab" data-bs-target="#recent-questions" type="button" role="tab" aria-controls="recent-questions" aria-selected="true">
										<i class="ri-facebook-fill pe-2"></i>
										B. Indonesia
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link font-bold" id="most-answered-tab" data-bs-toggle="tab" data-bs-target="#most-answered" type="button" role="tab" aria-controls="most-answered" aria-selected="false">
										<i class="ri-facebook-fill pe-2"></i>
										PPKN 
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link font-bold" id="unanswered-question-tab" data-bs-toggle="tab" data-bs-target="#unanswered-question" type="button" role="tab" aria-controls="unanswered-question" aria-selected="false">
										<i class="ri-facebook-fill pe-2"></i>
										B. Inggris
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link font-bold" id="featured-question-tab" data-bs-toggle="tab" data-bs-target="#featured-question" type="button" role="tab" aria-controls="featured-question" aria-selected="false">
										<i class="fas fa-landmark pe-2"></i>
										IPS
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link font-bold" id="matematika-question-tab" data-bs-toggle="tab" data-bs-target="#matematika-question" type="button" role="tab" aria-controls="matematika-question" aria-selected="false">
										<i class="fa-solid fa-calculator pe-2"></i>
										Matematika
									</button>
								</li>
							</ul>
						</div>
						  
							
						{{-- <div class="sidebar-menu-wrap">
							<div class="sidemenu-wrap d-flex justify-content-between align-items-center">
								<h3>Pify Sidebar Menu</h3>
								<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
									<i class="ri-menu-line"></i>
								</button>
							</div>
							
							<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>
								<div class="offcanvas-body">
									<div class="left-sidebar">
										<nav class="sidebar-nav" data-simplebar>
											<ul id="sidebar-menu" class="sidebar-menu">
												<li>
													<a href="index.html" class="box-style">
														<span class="menu-title">
															<i class="ri-home-8-line"></i>
															Home
														</span>
													</a>
												</li>
												<li class="mm-active">
													<a href="#" class="has-arrow box-style active">
														<i class="ri-question-line"></i>
														<span class="menu-title">
															Questions
														</span>
													</a>
													<ul class="sidemenu-nav-second-level">
														<li>
															<a href="all-queations.html">
																<span class="menu-title active">All questions</span>
															</a>
														</li>
														<li>
															<a href="queations-details.html">
																<span class="menu-title">Questions details</span>
															</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="communities.html" class="box-style">
														<span class="menu-title">
															<i class="ri-links-line"></i>
															Communities
														</span>
													</a>
												</li>
												<li>
													<a href="#" class="has-arrow box-style">
														<i class="ri-question-answer-fill"></i>
														<span class="menu-title">
															Most answered
														</span>
													</a>
													<ul class="sidemenu-nav-second-level">
														<li>
															<a href="most-answered.html">
																<span class="menu-title">Most answered</span>
															</a>
														</li>
														<li>
															<a href="most-answered-details.html">
																<span class="menu-title">Most answered details</span>
															</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="unanswered.html" class="box-style">
														<span class="menu-title">
															<i class="ri-checkbox-circle-line"></i>
															Unanswered
														</span>
													</a>
												</li>
												<li>
													<a href="most-visited.html" class="box-style">
														<span class="menu-title">
															<i class="ri-eye-line"></i>
															Most visited 
														</span>
													</a>
												</li>
												<li>
													<a href="polls.html" class="box-style">
														<span class="menu-title">
															<i class="ri-bar-chart-fill"></i>
															Polls
														</span>
													</a>
												</li>
												<li>
													<a href="faq.html" class="box-style">
														<span class="menu-title">
															<i class="ri-hq-line"></i>
															FAQs
														</span>
													</a>
												</li>
												<li>
													<a href="groups.html" class="box-style">
														<span class="menu-title">
															<i class="ri-group-2-line"></i>
															Groups
														</span>
													</a>
												</li>
												<li>
													<a href="education.html" class="box-style">
														<span class="menu-title">
															<i class="ri-book-line"></i>
															Education
														</span>
													</a>
												</li>
												<li>
													<a href="technology.html" class="box-style">
														<span class="menu-title">
															<i class="ri-file-shield-2-line"></i>
															Technology
														</span>
													</a>
												</li>
												<li>
													<a href="tags.html" class="box-style">
														<span class="menu-title">
															<i class="ri-price-tag-line"></i>
															Tags
														</span>
													</a>
												</li>
												<li>
													<a href="badges.html" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															Badges
														</span>
													</a>
												</li>
			
												<li>
													<a href="#" class="has-arrow box-style">
														<i class="ri-user-line"></i>
														<span class="menu-title">
															User
														</span>
													</a>
													<ul class="sidemenu-nav-second-level">
														<li>
															<a href="user.html">
																<span class="menu-title">User</span>
															</a>
														</li>
														<li>
															<a href="user-profile.html">
																<span class="menu-title">User profile</span>
															</a>
														</li>
														<li>
															<a href="ask-questions.html">
																<span class="menu-title">Ask a questions</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div> --}}
					</div>

					<div class="col-lg-7">
						<div class="middull-content">
							{{-- <ul class="page-nish">
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
									All questions
								</li>
							</ul> --}}
							
							{{-- <form class="aq-form">
								<i class="ri-search-line"></i>
								<input type="text" class="form-control rounded-pill" placeholder="Have a question? Ask or enter a search">
								<button class="aq-btn">
									Ask Question
								</button>
							</form> --}}

							<div class="card pb-5 pt-4 px-3">
								<div class="card-body">
									<div class="d-flex">
										<div class="flex-grow-1 ms-3">
											<ul class="graphic-design">
												<li>
													<a>
														<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
													</a>
												</li>
												<li>
													<span>Mahaguru</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="ms-5">
										<h1 class="card-title pb-3">
											Punya Pertanyaan?
										</h1>
										<a href="#" class="btn btn-dark fw-bold" style="border-radius: 20px;">TANYA SEKARANG!</a>
									</div>
								</div>
							</div>

							
							<div class="container py-3">
								<div class="row">
									<div class="col-md-6">
										<select class="form-select select-rounded" aria-label="Default select example" style="width: 80%;">
											<option selected>Semua tingkat pendidikan</option>
											<option value="1">Sekolah Dasar</option>
											<option value="2">Sekolah Menengah Pertama</option>
											<option value="3">Sekolah Menengah Atas</option>
										</select>
									</div>
									<div class="col-md-6">
										<select class="form-select select-rounded" aria-label="Default select example" style="width: 50%;">
											<option selected>Semua</option>
											<option value="1">Belum terjawab</option>
											<option value="2">Terjawab</option>
										</select>
									</div>
								</div>
							</div>
						


							{{-- <ul class="nav nav-tabs questions-tabs d-flex justify-content-between" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="recent-questions-tab" data-bs-toggle="tab" data-bs-target="#recent-questions" type="button" role="tab" aria-controls="recent-questions" aria-selected="true">
										Recent Questions
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="most-answered-tab" data-bs-toggle="tab" data-bs-target="#most-answered" type="button" role="tab" aria-controls="most-answered" aria-selected="false">
										Most Answered 
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="unanswered-question-tab" data-bs-toggle="tab" data-bs-target="#unanswered-question" type="button" role="tab" aria-controls="unanswered-question" aria-selected="false">
										Unanswered Question
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="featured-question-tab" data-bs-toggle="tab" data-bs-target="#featured-question" type="button" role="tab" aria-controls="featured-question" aria-selected="false">
										Featured Question
									</button>
								</li>
							</ul> --}}

							{{-- Content --}}
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="recent-questions" role="tabpanel" aria-labelledby="recent-questions-tab">
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
										<a href="all-queations.html" class="next page-numbers">
											<i class="ri-arrow-left-line"></i>
										</a>
										<span class="page-numbers current" aria-current="page">1</span>
										<a href="all-queations.html" class="page-numbers">2</a>
										<a href="all-queations.html" class="page-numbers">3</a>
										
										<a href="all-queations.html" class="next page-numbers">
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
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-left-line"></i>
										</a>
										<span class="page-numbers current" aria-current="page">1</span>
										<a href="ask-questions.html" class="page-numbers">2</a>
										<a href="ask-questions.html" class="page-numbers">3</a>
										
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-right-line"></i>
										</a>
									</div>
								</div>

								<div class="tab-pane fade" id="unanswered-question" role="tabpanel" aria-labelledby="unanswered-question-tab">
									<div class="single-qa-box like-dislike">
										<div class="d-flex">
											{{-- <div class="link-unlike flex-shrink-0">
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
											</div> --}}

											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													{{-- <li>
														<a href="user.html">Teresa Klein</a>
													</li> --}}
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
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-left-line"></i>
										</a>
										<span class="page-numbers current" aria-current="page">1</span>
										<a href="ask-questions.html" class="page-numbers">2</a>
										<a href="ask-questions.html" class="page-numbers">3</a>
										
										<a href="ask-questions.html" class="next page-numbers">
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
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-left-line"></i>
										</a>
										<span class="page-numbers current" aria-current="page">1</span>
										<a href="ask-questions.html" class="page-numbers">2</a>
										<a href="ask-questions.html" class="page-numbers">3</a>
										
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-right-line"></i>
										</a>
									</div>
								</div>

								<div class="tab-pane fade" id="matematika-question" role="tabpanel" aria-labelledby="matematika-question-tab">
									<div class="single-qa-box card">
										<div class="d-flex card-body">
											{{-- <div class="link-unlike flex-shrink-0">
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
											</div> --}}

											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												{{-- <ul class="tag-list">
													<li>
														<a href="tags.html">Discussion</a>
													</li>
													<li>
														<a href="tags.html">Photoshop</a>
													</li>
													<li>
														<a href="tags.html">Analytics</a>
													</li>
												</ul> --}}

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													{{-- <ul class="anser-list">
														<li>
															<a href="polls.html">
																24 Vote
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
													</ul> --}}

													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="single-qa-box card">
										<div class="d-flex card-body">
											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="single-qa-box card">
										<div class="d-flex card-body">
											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="single-qa-box card">
										<div class="d-flex card-body">
											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="single-qa-box card">
										<div class="d-flex card-body">
											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="single-qa-box card">
										<div class="d-flex card-body">
											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="single-qa-box card">
										<div class="d-flex card-body">
											<div class="flex-grow-1 ms-3">
												<ul class="graphic-design">
													<li>
														<a>
															<img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
														</a>
													</li>
													<li>
														<a href="#">Matematika</a>
													</li>
													<li>
														<span>14 hours ago</span>
													</li>
												</ul>

												<h3>
													<a href="queations-details.html">
														If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
													</a>
												</h3>

												<div class="d-flex align-items-end flex-column bd-highlight mb-3">
													<a href="#" class="default-btn mt-3">
														Answer
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="pagination-area">
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-left-line"></i>
										</a>
										<span class="page-numbers current" aria-current="page">1</span>
										<a href="ask-questions.html" class="page-numbers">2</a>
										<a href="ask-questions.html" class="page-numbers">3</a>
										
										<a href="ask-questions.html" class="next page-numbers">
											<i class="ri-arrow-right-line"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- End Content --}}

					{{-- Sidebar Right --}}
					<div class="col-lg-3">
						<div class="right-siderbar">
							{{-- <div class="right-siderbar-common">
								<a href="ask-questions.html" class="default-btn rounded-pill">
									Ask a question
								</a>
							</div> --}}

							{{-- <div class="right-siderbar-common">
								<div class="category">
									<h3>
										<i class="ri-list-unordered"></i>
										Categories
									</h3>

									<select class="form-select" aria-label="Default select example">
										<option selected>Select category</option>
										<option value="1">Discussion</option>
										<option value="2">Language</option>
										<option value="3">Analytics</option>
									</select>
								</div>
							</div> --}}

							<div class="right-sidebar-common">
								<div class="card">
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
										{{-- <span class="d-block lencana ms-3">Bintang Briliant</span>
										<span class="lencana ms-3">Gratitude Attitude</span>
										<span class="lencana ms-3">5+ lebih banyak</span> --}}
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
								<div class="discussions">
									<h3>
										<i class="ri-speaker-line"></i>
										Top Discussions
									</h3>

									<ul>
										<li>
											<a href="most-answered.html">
												The idea of how I will share my profile on social sites
											</a>
										</li>
										<li>
											<a href="most-answered.html">
												Discuss the rules for maintaining all the employees in the company
											</a>
										</li>
										<li>
											<a href="most-answered.html">
												The best way to choose between a job and a business
											</a>
										</li>
										<li>
											<a href="most-answered.html">
												Which is the most important UIUX in terms of design?
											</a>
										</li>
									</ul>
								</div>
							</div> --}}

							<div class="right-siderbar-common">
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
							</div>

							{{-- <div class="right-siderbar-common">
								<div class="recent-post">
									<h3>
										<i class="ri-discuss-line"></i>
										Recent post
									</h3>

									<ul>
										<li>
											<a href="most-answered.html">
												What could be UX design software?
											</a>
											<p>8 hours ago by <a href="user.html">Alan Woodson</a></p>
										</li>
										<li>
											<a href="most-answered.html">
												All the new features that have been used in Windows 11
											</a>
											<p>11 hours ago by <a href="user.html">Juan McPhail</a></p>
										</li>
										<li>
											<a href="most-answered.html">
												What is the most important thing in learning design?
											</a>
											<p>11 hours ago by <a href="user.html">Vickie White</a></p>
										</li>
										<li>
											<a href="most-answered.html">
												Which language is the most popular in the web right now?
											</a>
											<p>13 hours ago by <a href="user.html">Jose Merz</a></p>
										</li>
									</ul>
								</div>
							</div> --}}

							<div class="right-siderbar-common">
								<div class="top-members">
									<h3>
										<i class="ri-discuss-line"></i>
										Top members
									</h3>

									<ul>
										<li>
											<a href="groups.html" class="d-flex">
												<div>
													<img src="template/pify/assets/images/user/user-8.jpg" alt="Image">
													<p class="d-inline">1.Yong Spears <span></span></p>
												</div>
											</a>
										</li>
										<li>
											<a href="groups.html" class="d-flex">
												<img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
												<p class="d-inline">2.Denise Jones <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="d-flex">
												<img src="template/pify/assets/images/user/user-10.jpg" alt="Image">
												<p class="d-inline">3.Dennis Rogers <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="d-flex">
												<img src="template/pify/assets/images/user/user-11.jpg" alt="Image">
												<p class="d-inline">4.Naomi Barnett <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="d-flex">
												<img src="template/pify/assets/images/user/user-12.jpg" alt="Image">
												<p class="d-inline">5.Mary Wenger <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="collapse" id="collapseExample">
												<img src="template/pify/assets/images/user/user-8.jpg" alt="Image">
												<p class="d-inline">6.Yong Spears <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="collapse" id="collapseExample">
												<img src="template/pify/assets/images/user/user-9.jpg" alt="Image">
												<p class="d-inline">7.Denise Jones <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="collapse" id="collapseExample">
												<img src="template/pify/assets/images/user/user-10.jpg" alt="Image">
												<p class="d-inline">8.Dennis Rogers <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="collapse" id="collapseExample">
												<img src="template/pify/assets/images/user/user-11.jpg" alt="Image">
												<p class="d-inline">9.Naomi Barnett <span></span></p>
											</a>
										</li>
										<li>
											<a href="groups.html" class="collapse" id="collapseExample">
												<img src="template/pify/assets/images/user/user-12.jpg" alt="Image">
												<p class="d-inline">10.Mary Wenger <span></span></p>
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Tampilkan</button>
							
							{{-- <div class="right-siderbar-common">
								<div class="ads">
									<a href="queations-details.html">
										<img src="assets/images/ad.jpg" alt="Image">
									</a>

									<a href="queations-details.html" class="default-btn">
										Learn More
									</a>
								</div>
							</div> --}}

							{{-- <div class="right-siderbar-common">
								<div class="trending-tags">
									<h3>
										<i class="ri-price-tag-3-line"></i>
										Trending Tags
									</h3>

									<ul>
										<li>
											<a href="tags.html">
												discussion
											</a>
										</li>
										<li>
											<a href="tags.html">
												analytics
											</a>
										</li>
										<li>
											<a href="tags.html">
												company
											</a>
										</li>
										<li>
											<a href="tags.html">
												life
											</a>
										</li>
										<li>
											<a href="tags.html">
												computer
											</a>
										</li>
										<li>
											<a href="tags.html">
												interview
											</a>
										</li>
										<li>
											<a href="tags.html">
												grammer
											</a>
										</li>
										<li>
											<a href="tags.html">
												convertion
											</a>
										</li>
										<li>
											<a href="tags.html">
												google
											</a>
										</li>
									</ul>
								</div>
							</div>p --}}
						</div>
					</div>
					{{-- End sidebar right --}}

				</div>
			</div>
		</div>
		<!-- End Mail Content Area -->


	</div>

@endsection