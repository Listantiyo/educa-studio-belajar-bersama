<div class="col-lg-7">
    <div class="middull-content">
        {{-- ask question --}}
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
        {{-- end ask question --}}
        
        {{-- filter --}}
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select select-rounded" aria-label="Default select example" style="width: 80%;">
                        <option value="" selected>Semua tingkat pendidikan</option>
                        @foreach ($filc as $class)
                        <option value="{{$class->id}}">{{$class->nama_class}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select select-rounded" aria-label="Default select example" style="width: 50%;">
                        <option value="" selected>Semua</option>
                        @foreach ($filt as $type)
                        <option value="{{$type->id}}">{{$type->nama_type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        {{-- end filter --}}

        {{-- Content Data --}}
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="matematika-question" role="tabpanel" aria-labelledby="matematika-question-tab">
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
            </div>
            <div class="tab-pane fade" id="question-data" role="tabpanel" aria-labelledby="question-data-tab">..3.</div>
        </div>
        {{-- End Content Data --}}

        {{-- pagination --}}
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
        {{-- end pagination --}}

    </div>
</div>
