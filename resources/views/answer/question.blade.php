<div class="single-qa-box card ms-auto" style="width: 85%;">
    <div class="d-flex">
        <div class="flex-grow-1 ms-3 container">
            <ul class="graphic-design">
                <li>
                    <a>
                        <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image">
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
                <p>{{$quest -> question}}</p>
            </h3>
            <div class="container">
                
            </div>
            <div class="d-flex bd-highlight align-items-center py-4">
                <a href="#sJawaban" class="bd-highlight view-answer">
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
                <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image" class="img-cmn">
            </a>
            <p>Terima kasih</p>
        </div>
        <div class="d-flex align-items-center mb-2">
            <a href="#">
                <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image" class="img-cmn">
            </a>
            <p>Sama-sama</p>
        </div>
        <div class="d-flex align-items-center mb-2">
            <a href="#">
                <img src="{{asset('template/pify/assets/images/user/user-1.jpg')}}" alt="Image" class="img-cmn">
            </a>
            <p>Ok</p>
        </div>
    </div>
    <input type="text" class="form-control comment" placeholder="Komentar">
</div>