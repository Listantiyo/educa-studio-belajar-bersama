<div>
    <div id="sJawaban" class="pt-5">
        <div class=" ms-auto" style="width: 85%; margin-top: 30px;">
            <h4 class="mb-0">JAWABAN :</h4>
            <hr>
        </div>
        <div v-for="ans in answer" class="single-qa-box card mt-3 ms-auto" style="width: 85%;">
            <div class="d-flex">
                <div  class="flex-grow-1 ms-3 container">
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
                        <p>@{{ans.answer}}</p>
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
            <input id="comment" name="comment" @keyup.enter="greet()" type="text" class="form-control comment" placeholder="Komentar">
        </div>
    </div>
</div>