@extends('layouts.master')
@section('content')

        <style>
            .single-qa-box {
                border: 1px solid #00000081 !important;
            }

            .Editor-editor {
                height: 270px !important;
            }

            .p-9{
                padding-top: 9%;
                padding-bottom: 9%;
            }

            .img-cmn {
                border-radius: 50px;
                width: 60%;
            }

            .single-qa-box p {
                margin-bottom: 0 !important;
            }

            .foto {
                background-color: grey;

            }
        </style>
		
        <div id="app" class="container pt-1 mt-5 ps-5 p-9">
            <div class="row">
                <div class="col-lg-8">

                    {{-- col question --}}
                    @include('answer.question')
                    {{-- n col question --}}

                    {{-- Answer --}}
                    @include('answer.answer')
                    {{-- N Answer --}}

                </div>

                {{-- R.Sidebar --}}
                @include('answer.right_sidebar')
                {{-- N R.Sidebar --}}

            </div>
        </div>
    {{-- Modal --}}
    @include('answer.modal')
    {{-- N Modal --}}
@endsection

@push('scripts')
<script>
    const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                answer :'',
                // new_quest :[],
                // type  :'',
            }
        },mounted() {
            $(document).ready(function () {

                const id = {{$quest -> id}}

                $.get("\\api/data/answer",{id:id},
                    function (rsp) {
                        console.log(rsp);
                        vues.answer = rsp
                    },
                    
                );

                $("#jawab").click(function (e) { 
                    e.preventDefault();
                    var user = {{Auth::id()}};
                    var text = $(".Editor-editor").html();   
                    // console.log(text,id);
                    $.post("\\api/data/store/answer", {text:text,user:user,id:id},
                        function (data) {
                            console.log(data);
                            // if (data === "kosong") {
                            //     alert("Pertanyaan Masih Kosong")
                            // }else if(data === "kopong"){
                            //     alert("Pilih Kelas")
                            // }else if(data === "kopsong"){
                            //     alert("Pilih Mata Pelajaran")
                            // }else{

                            //     $(".Editor-editor").html(null);
                            //     $("#sClas").val(null);    
                            //     $("#sMpel").val(null);
                            //     // vues.type.push(data);
                            //     vues.quest.unshift(data);
                            //     // console.log(data.qs);
                            //     $("#btn-close").trigger("click");
                            
                            // }
                        },
                    );
                });
            });
        },
    }).mount('#app') 
</script>
@endpush

