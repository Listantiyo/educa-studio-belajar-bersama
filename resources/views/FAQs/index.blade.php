@extends('layouts.master')

@section('content')

    <div class="middull-content">
        <ul class="page-nish">
            <li>
                <a href="{{route('menu')}}">
                    <i class="ri-home-8-line"></i>
                    Home
                </a>
            </li>
            <li class="active">
                FAQs
            </li>
        </ul>

        {{-- <form class="aq-form">
            <i class="ri-search-line"></i>
            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
            <button class="aq-btn">
                Ask Question
            </button>
        </form> --}}

        <div class="accordion mb-0" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                        Apa itu Pify?
                    </button>
                </h2>

                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Pify adalah website tanya dan menjawab untuk pengguna website online, pify menyediakan fitur bertanya untuk mengajukan pertanyaan dan fitur menjawab untuk menjawab pertanyaan</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Bagaimana cara membuat pertanyaan?
                    </button>
                </h2>

                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Langkah pertama yang diharus dilakukan saat ingin membuat pertanyaan yaitu<br>Klik tombol yang bertuliskan "Ask a Question" seperti foto dibawah ini</p>
                        <p>2. Lalu masukan title atau judul pertanyaan, masukan juga komunitas dan tambahkan tag bagian yang terpenting adalah mengisi pertanyaan nya<br>Tambahkan foto jika perlu untuk memperdetail pertanyaaan mu.</p>
                        <p>3. Lalu klik tombol "Ask your question" dan pertanyaan mu sudah diposting.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bagaimana cara menjawab pertanyaan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Pilih pertanyaan yang ingin kamu jawab terlebih dahulu, lalu klik pertanyaan tersebut</p>
                        <p>2. Lalu masukanlah jawaban mu ditempat yang sudah disediakan pada tampilan masukan jawaban mu dengan kreasifitas kamu sendiri</p>
                        <p>3. Jika sudah membuat jawaban posting jawaban mu dengan klik "Post your answer" dan jawabanmu telah diposting dipertanyaan tersebut</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apakah ada peraturan saat aku membuat sebuah pertanyaan?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Dilarang menggunakan kata kata sara</p>
                        <p>2. Dilarang menggunakan kata kata yang bersifat menghina dan merendahkan</p>
                        <p>3. Gunakan kata kata yang mudah  dipahami oleh para penjawab</p>
                        <p>4. Jika ada pelanggaran dalam pertanyaan tersebut, pertanyan tidak akan dimunculkan pada tampilan</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Bagaimana cara mengganti password?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Klik nama mu diatas kanan navbar</p>
                        <p>2. Lalu pilih opsi user profile</p>
                        <p>3. Jika sudah klik tombol "edit profile" </p>
                        <p>4. Lalu pilih change password/email</p>
                        <p>5. Setelah diganti sesuai keinginnan mu, jangan lupa di update</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Bagaimana cara membuat akun di pify?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Pertama-tama kamu harus memiliki email untuk digunakan</p>
                        <p>2. Lalu klik tombol bertuliskan "Sign up"</p>
                        <p>3. lalu isi data yang sesuai seperti "Nama, Password, Email"</p>
                        <p>4. Lalu "Sign up" dan selesai</p>
                    </div>
                </div>
            </div>

            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What to do to be able to write a good answer?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada faucibus orci luctus et.</p>
                    </div>
                </div>
            </div> --}}

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Bagaimana cara mengikuti komunitas?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. Lihat dibagian kiri dan pilih tombol communities</p>
                        <p>2. Lalu pilih fitur "Communities unfollowed"</p>
                        <P>3. Kalian bisa cari komunitas yang kamu inginkan dan bisa kamu ikuti</P>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Bagaimana cara menemukan pertanyaan?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Kamu bisa langsung mencari pertanyaan dengan cara dibawah ini</p>
                        <img src="{{asset('pify/assets/images/faq/faq.png')}}" style="padding-left: 85px; height: 350px; padding-bottom: 80px;"> 
                        <p>Kamu bisa langsung mencari pertanyaan pada tabel "Have A question? Ask or enter a search"</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Bagaimana cara logout akun?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Cara kali ini cukup mudah</p>
                        <p>1. Yang pertama kalian klik nama kamu di atas kanan</p>
                        <p>2. Lalu kamu pilih opsi "LogOut"</p>
                        <p>3. Taraaaa!!..... kalian sudah berhasil Logout dari akun kamu,Kamu bisa mengganti atau membuat akun baru</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection