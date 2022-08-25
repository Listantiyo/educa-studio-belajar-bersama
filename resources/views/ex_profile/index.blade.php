@extends('layouts.master')


@section('content')


<link rel="stylesheet" href="css/docs.theme.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<style>
    .single-qa-box {
        border: none !important;
    }
</style>

<!-- Blue banner -->

<div>
    <img src="https://brainly.co.id/app/img/profile/wallpaper_others.svg" class="sg-animation-fade-in-slow" ></div> 
</div>
    {{-- Nama profile dan lencana --}}
<div class="container py-4">
    <div class="row">
        <div class="col-md-4">
            <div class="container d-flex">
                <div class="d-inline">
                    <i class="fa-solid fa-circle-user" style="font-size: 80px;"></i>
                </div>
                <div class="pt-3 ms-4">
                    <h5 class="fw-bold">{{Auth::user()->name}}</h5>
                    <span class="d-block lencana">Ambisius</span>
                </div>
            </div>
            <div class="container" style="padding-top: 30px;">
                <div class="row row-cols-auto">
                    <div class="col" style="border-right: 2px solid black;">
                        <div class="text-center">
                            <p class="mb-0">Jawaban</p>
                            <span class="fs-4" style="font-weight: 600; font-size: 10px;">10</span>
                        </div>
                    </div>
                    <div class="col" style="border-right: 2px solid black;">
                        <div class="text-center">
                            <p class="mb-0">Tercerdas</p>
                            <span class="fs-4" style="font-weight: 600; font-size: 10px;">10</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <p class="mb-0">Terima kasih</p>
                            <span class="fs-4" style="font-weight: 600; font-size: 10px;">56</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container card-body d-flex" style="padding-top: 40px;">
                <ul class="list-lencana">
                    {{-- <li>
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
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Answer Master
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            B. Indonesia Knower
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Biologi knower
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            PPKn Knower
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Akuntasnsi Student
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            B. Arab Student
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Bahasa lain Student
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Brainliest Student
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Challenger
                        </span>
                    </li>
                    <li>
                        <span class="lencana">
                            <i class="fa-solid fa-shield-halved"></i>
                            Geography Student
                        </span>
                        <li>
                            <a href="#" class="lencana">5+ lebih banyak</a>
                        </li> --}}
                    </li>
                    <a href="#" class="btn text-white" style="background-color: rgb(105, 105, 105); border-radius: 30px; padding-left: 5px; margin-top: 20px; margin-left: 10px; width: 300px;">
                        <i class="fa fa-pen"></i>
                        Edit profile
                    </a>
                    <h6 style="font-weight: 700; padding-top: 50px;"> Keterangan </h6>
                    <hr>
                        <div style="font-size: 12px;">
                            <i class="fa-solid fa-graduation-cap"></i>
                                Tingkat sekolah : <b> Sekolah Menengah Atas</b>
                        </div>
                        {{-- <div style="font-size: 12px; padding-top: 10px;">
                            <i class="fa-solid fa-calendar-days"></i>
                                Bergabung : <b> 17 November 2021</b>
                        </div>
                            <div style="font-size: 12px; padding-top: 10px;">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                Peringatan : <b> 1 </b> (hanya kamu yang dapat melihat)
                        </div> --}}
                </ul>
            </div>
        </div>
        {{-- Opsi jawaban,pertanyaan,penghargaan,teman --}}
        {{-- TABs --}}
        <div class="col-md-8">
            <ul class="nav nav-tabs justify-content-center" style="border-bottom: 0px" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jawaban" type="button" role="tab" aria-controls="home" aria-selected="true">Jawaban</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="profile" aria-selected="false">Pertanyaan</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#pencapaian" type="button" role="tab" aria-controls="contact" aria-selected="false">Pencapaian</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#teman" type="button" role="tab" aria-controls="contact" aria-selected="false">Teman</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="jawaban" role="tabpanel" aria-labelledby="home-tab">
                    <div class=" card">
                        <div class="d-flex single-qa-box">
                            <div class="flex-grow-1 ms-3">
                                <ul class="graphic-design">
                                    <li>
                                        <a>
                                            <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                        </a>
                                    </li>
                                    <li>
                                        <a style="text-decoration: none;" href="#">Mtk</a>
                                    </li>
                                    <li>
                                        <span>14 hours ago</span>
                                    </li>
                                </ul>
                                <h3>
                                    <a style="text-decoration: none;" href="queations-details.html">
                                        {{-- @{{qs.question}} --}}
                                        Hasil dari -4 + 8 : (-2) x 2 + 5 -2 adalah...
                                    </a>
                                </h3>
                                <a style="text-decoration: none;" href="#" class="ms-auto bd-highlight lapor-btn">
                                    <i class="fa-solid fa-heart fs-5"></i>
                                </a>
                                <a style="text-decoration: none;" href="#" class="ms-auto bd-highlight lapor-btn" style="padding-left: 40px;">
                                    <i class="fa-solid fa-star fs-5"></i>
                                </a>
                                
                            </div>                                    
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pertanyaan" role="tabpanel" aria-labelledby="profile-tab">
                    <div class=" card">
                        <div class="single-qa-box d-flex">
                            <div class="flex-grow-1 ms-3">
                                <ul class="graphic-design">
                                    <li>
                                        <a>
                                            <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                        </a>
                                    </li>
                                    <li>
                                        <a style="text-decoration: none;" href="#">B.inggris</a>
                                    </li>
                                    <li>
                                        <span>14 hours ago</span>
                                    </li>
                                </ul>
                                <h3>
                                    <a style="text-decoration: none;" href="queations-details.html">
                                        Buat ringkasan tentang saran dan rekomendasi​....
                                    </a>
                                </h3>
                                <a style="text-decoration: none;" href="#" class="ms-auto bd-highlight lapor-btn">
                                    <i class="fa-solid fa-circle-exclamation fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pencapaian" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-8 p-3">
                                        <h4><b>Pencapaian</b></h4> 
                                        <p style="font-size: 15px; line-height: 20px;">Mau dapat lebih banyak poin? Tingkatkan level-mu! Ayo, jawab lebih banyak pertanyaan, raih lencananya, dan dapatkan poin ekstra!</p>
                                    </div>
                                    <div class="col-sm-4" style="position: relative; overflow: hidden;">
                                        <img src="https://brainly.co.id/app/img/achievements/achievements-banner.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-warning" style="font-size: 35px; position: absolute; padding-top: 50px;">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <p style="font-size: 15px; font-weight: 1000; position: absolute; padding-top: 65px; padding-left: 50px;">buka pencapaian</p>
                        <p style="font-size: 15px; font-weight: 500; position: absolute; padding-top: 160px; padding-left: 50px;">Sedang Berjalan</p>
                    </div>
                    
                    
                <div class="tab-pane fade" id="teman" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card">
                        <div class="single-qa-box d-flex">
                            <div class="flex-grow-1 ms-3">
                                <ul class="graphic-design">
                                    <li>
                                        <a>
                                            <img src="template/pify/assets/images/user/user-1.jpg" alt="Image">
                                        </a>
                                    </li>
                                    
                                </ul>
                                <h3>
                                    <a class="text-center" style="text-decoration: none;" href="queations-details.html">
                                        Ora nduwe konco euy :(
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection