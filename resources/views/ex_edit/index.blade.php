@extends('layouts.master')


@section('content')
    <!-- Accordion Start -->


    {{-- accordion preferensi --}}
    <div class="container my-5" style="padding-top: 60px;">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 90%; border-radius: 20px;">
                <div class="card-body row">
                    <h5 class="card-title">Edit profilmu</h5>
                    <hr>
                    <div class="col-md-7 accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item" style="width: 90%; border-radius: 20px;">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    Preferensi
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h6 class="card-title" style="font-size: 15px; font-weight: 400">Perubahan data dasar
                                    </h6>
                                    <hr>
                                    <form>
                                        <label for="gender">Gender :</label>
                                        <select id="gender" style="margin-left: 90px; width: 220px;">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>


                                        <div class="form-group row" style="padding-top: 10px;">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"
                                                style="padding-top: 25px; font-size: 15px; font-weight: 400;">Nama:</label>
                                            <div class="col-sm-10" style="padding-top: 20px;">
                                                <input style="height: 35px; margin-left: 55px; width: 220px;" type="email"
                                                    class="form-control form-control-sm" id="colFormLabelSm"
                                                    placeholder="Ahmad">
                                            </div>
                                        </div>

                                        <div style="padding-top: 20px;">
                                            <label for="sekolah">Tingkat <br>pendidikan :</label>
                                            <select id="sekolah" style="margin-left: 60px;">
                                                <option value="Sekolah dasar">Sekolah dasar</option>
                                                <option value="Sekolah menengah pertama">Sekolah menengah pertama</option>
                                                <option value="Sekolah menengah atas">Sekolah menengah atas</option>
                                            </select>
                                        </div>
                                    </form>


                                    <h6 class="card-title" style="font-size: 20px; font-weight: 400; padding-top: 20px;">
                                        Privasi</h6>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tampilkan peringkatku
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Terima komentar dari orang asing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Aku ingin menerima permintaan pertemanan
                                        </label>
                                    </div>

                                    <div class="container d-flex">
                                        <div class="" style="padding-top: 30px;">
                                            <a class="default-btn" style="text-decoration: none; background-color: #FFA51F;"
                                                href="">Simpan</a>
                                        </div>
                                        <div class="d-inline ms-3" style="padding-top: 30px;">
                                            <a class="default-btn" style="text-decoration: none; background-color: #9e9e9e;"
                                                href="">Batal</a>
                                        </div>
                                        <div class="d-inline ms-3" style="padding-top: 100px;">
                                            <a class="default-btn"
                                                style="font-weight: 900; font-size: 10px; height: 70px; margin: 20px; text-decoration: none; background-color: #cfcfcf;"
                                                href="">Aku ingin menghapus akun ku</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- accordion kirim info --}}
                        <div class="accordion-item" style="width: 90%; border-radius: 20px;">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Kirim info ke Email
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                    body. Let's imagine this being filled with some actual content.
                                </div>
                            </div>
                        </div>
                        {{-- accodion kata sandi --}}
                        <div class="accordion-item" style="width: 90%; border-radius: 20px;">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Kata Sandi
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h6 class="card-title" style="font-size: 15px; font-weight: 400">Ubah kata sandi</h6>
                                    <hr>
                                    <form action="/action_page.php">
                                        <label for="fname">Kata sandi sebelumnya :</label>
                                        <input type="password" id="password" placeholder="">
                                    </form>
                                    <form action="/action_page.php">
                                        <label for="fname" style="padding-top: 20px;">Kata sandi baru :</label>
                                        <input type="password" id="password" placeholder="" style="margin-left: 52px;">
                                    </form>
                                    <form action="/action_page.php">
                                        <label for="fname" style="padding-top: 25px;">Ulangi kata sandi :</label>
                                        <input type="password" id="password" placeholder="" style="margin-left: 40px;">

                                        <div class="container d-flex">
                                            <div class="" style="padding-top: 30px;">
                                                <a class="default-btn"
                                                    style="text-decoration: none; background-color: #FFA51F;"
                                                    href="">Simpan</a>
                                            </div>
                                            <div class="d-inline ms-3" style="padding-top: 30px;">
                                                <a class="default-btn"
                                                    style="text-decoration: none; background-color: #9e9e9e;"
                                                    href="">Batal</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- accordion email --}}
                        <div class="accordion-item" style="width: 90%; border-radius: 20px;">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Emailmu
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h6 class="card-title" style="font-size: 13px; font-weight: 400">Perubahan alamat
                                        email</h6>
                                    <hr>
                                    <h6 class="card-title" style="font-size: 13px; font-weight: 300">Alamat yang digunakan
                                        saat ini :<b>ay8400628@gmail.com</b></h6>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kata sandi saat ini</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password" style="height: 40px;">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email sekarang</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email"
                                                    style="height: 40px;">
                                                <small id="emailHelp" class="form-text text-muted">Kami tidak akan
                                                    menampilkan kepada siapapun</small>
                                            </div>
                                        </form>
                                        <div class="" style="padding-top: 30px;">
                                            <a class="default-btn"
                                                style="text-decoration: none; background-color: #FFA51F;"
                                                href="">Simpan</a>
                                            <div class="d-inline ms-3" style="padding-top: 30px;">
                                                <a class="default-btn"
                                                    style="text-decoration: none; background-color: #9e9e9e;"
                                                    href="">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- accordion profile --}}
                        <div class="accordion-item" style="width: 90%; border-radius: 20px;">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Gambar profil
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <i class="btn" style="border-radius: 20px; background-color: #fcf8e3;">Gambar
                                        profil bisa berupa file jpeg/gif/png<span>Gambar profil harus lebih kecil dari 5
                                            megabyte</i>
                                    <div class="controls" style="padding-top: 30px;">
                                        <input type="file" name="data[User][Attachment]" label=""
                                            value="" id="UserAttachment">
                                        <div class="" style="padding-top: 30px;">
                                            <a class="default-btn"
                                                style="text-decoration: none; background-color: #FFA51F;"
                                                href="">Simpan</a>
                                            <div class="d-inline ms-3" style="padding-top: 30px;">
                                                <a class="default-btn"
                                                    style="text-decoration: none; background-color: #9e9e9e;"
                                                    href="">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Accordion end --}}

                    {{-- ID Card --}}
                    <div class="col-md-5">
                        <div class="card"
                            style="width: 14rem; padding-right: 20px; margin-right: 30px; margin: auto; width: 400px; background-color:#ffc56f">
                            <div class="d-flex flex-row">
                                <img class="card-img-top"
                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                                    style="width: 100px; height: 100px; padding: 10px;" alt="">
                                <div class="card-body d-flex">
                                    <p class="card-text">Halo ay8400628! <a class="text-primary" type="button"
                                            style="font-size: 15px; font-weight: 600; text-decoration: none;"
                                            href="https://33.ahmadyasin4.repl.co"> Edit profile! </a> </p>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 20px;">
                            <p class="text-black" style="font-size: 15px; font-weight: 600;"> 3 solusi terbaik <b> tersisa
                                    untuk</b> <a class="text-info" type="button"
                                    style="font-size: 20px; font-weight: 800; text-decoration: none;"
                                    href="https://33.ahmadyasin4.repl.co"> terpelajar </a> </p>
                        </div>
                        <div style="padding-top: 30px;">
                            <p class="text-black" style="font-size: 15px; font-weight: 500;"> Teman yang Online </p>
                            <hr>
                            <p class="text-black" style="font-size: 10px; font-weight: 400;"> Tidak ada yang online,
                                karena gapunya temen :v</p>
                            <hr>
                        
                          </div>
                    
                      </div>
                
                  </div>
            
              </div>
        
          </div>
    
      </div>
@endsection
