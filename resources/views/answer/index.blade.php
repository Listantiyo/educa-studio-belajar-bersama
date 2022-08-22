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
		
        <div id="app" class="container ps-5 p-9">
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
                // answer :'',
                new_quest :[],
                // type  :'',
            }
        },mounted() {
            $(document).ready(function () {
            
                $.ajax({
                    url: "api/data/answer",
                    success: function (rsp) {
                        vues.new_quest = rsp
                    }
                });
            });
        },
    }).mount('#app') 
</script>
@endpush

