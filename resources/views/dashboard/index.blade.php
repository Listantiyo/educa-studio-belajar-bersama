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
								<li>
									<button class="nav-link font-bold" id="matematika-question-tab" data-bs-toggle="tab" data-bs-target="#matematika-question" type="button" role="tab" aria-controls="matematika-question" aria-selected="false">
										<i class="fa-solid fa-calculator pe-2"></i>
										Matematika
									</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-7">
						<div class="middull-content">
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

							{{-- Content --}}
							<div class="tab-content" id="myTabContent">
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
					{{-- End sidebar right --}}

				</div>
			</div>
		</div>
		<!-- End Mail Content Area -->


	</div>

@endsection