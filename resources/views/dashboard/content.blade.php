<div class="col-lg-7">
    <div class="middull-content">
        {{-- ask question --}}
        <div class="card pb-5 pt-4 px-3" style="border: 1px solid #00000081;">
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
                    <a href="#" class="btn btn-dark fw-bold" style="border-radius: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">TANYA SEKARANG!</a>
                </div>
            </div>
        </div>
        {{-- end ask question --}}
    
        {{-- filter --}}
        <div class="container py-3">
            <div class="row">
                <div class="col-md-8 d-flex">
                    <select class="form-select select-rounded filter me-3" id="class" aria-label="Default select example" style="width: 80%;">
                        <option value="" selected>Semua tingkat pendidikan</option>
                        @foreach ($filc as $class)
                        <option value="{{$class->id}}">{{$class->nama_class}}</option>
                        @endforeach
                    </select>
                    <select class="form-select select-rounded filter" id="type" aria-label="Default select example" style="width: 50%;">
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
                <div v-for="qs in quest" class="single-qa-box card">
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
                                <a href="queations-details.html">
                                    @{{qs.question}}
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
            <div class="tab-pane fade" id="question-data" role="tabpanel" aria-labelledby="question-data-tab" >
                <div v-for="qs in quest" class="single-qa-box card">
                    <div class="d-flex card-body">
                        <div class="flex-grow-1">
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
                                <a href="queations-details.html">
                                    @{{qs.question}}
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
        </div>

        {{-- modal start --}}
        <div class="modal fade py-3" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h6 class="modal-title fw-bold" id="exampleModalToggleLabel">Ajukan Pertanyaan</h6>
                <button type="button" class="btn-close" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="height:50%;">
                        <div id="txtEditor"></div>
                        <div class="container py-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <select class="form-select select-rounded" id="sMpel" aria-label="Default select example" style="width: 100%">
                                        <option selected disabled>Pilih mata pelajaran</option>
                                        @foreach ($film as $mapel)              
                                        <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-select select-rounded" id="sClas" aria-label="Default select example" style="width: 40%;">
                                        <option selected disabled value="">Kelas</option>
                                        @foreach ($filc as $class)
                                        <option value="{{$class->id}}">{{$class->nama_class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark fw-bold col-sm-4" id="tanya" style="border-radius: 20px;">TANYAKAN PERTANYAANMU</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="width:45%">
            <div class="modal-content container py-4">
                <div class="modal-body row ">
                    <div class="col-sm-12 mb-3 align-items-center">
                        <h6 class="fw-bold">Kamu yakin tidak jadi bertanya?</h6>
                        <p>Jika kamu keluar, pertanyaanmu tidak akan kami tambahkan</p>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-dark" style="border-radius: 20px; width: 105%;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">LANJUT BERTANYA</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-light" style="border-radius: 20px; width: 105%;" data-bs-dismiss="modal" aria-label="Close">TANYAKAN NANTI</button> 
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>