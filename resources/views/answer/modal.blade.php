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
                  <button id="jawab" class="btn btn-dark fw-bold" style="border-radius: 20px;">TAMBAHKAN JAWABAN</button>
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