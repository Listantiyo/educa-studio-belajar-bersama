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
<div id="app">
        <div>
            <img src="https://brainly.co.id/app/img/profile/wallpaper_others.svg" class="sg-animation-fade-in-slow" >
        </div> 
        {{-- <div >
            <p></p>
        </div> --}}
        {{-- Nama profile dan lencana --}}
    <div class="container py-4">
        <div class="row">
            {{-- Profile --}}
            @include('ex_profile.profile')
            {{-- Opsi jawaban,pertanyaan,penghargaan,teman --}}
            {{-- TABs --}}
            @include('ex_profile.detail')
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script>
        const { createApp } = Vue

        const vues = createApp({
            data() {
                return {
                    quest :[],
                    clas :'class',
                    // type  : [],
                }
            },mounted() {
                $(document).ready(function () {
                    let id = {{Auth::id()}}
                    
                    $.ajax({
                        type: "get",
                        data: {id:id},
                        url: "api/data/profile/question",
                        success: function (rsp) {
                            console.log(rsp);
                            vues.quest = rsp;
                        }
                    });
                });
            }
        }).mount('#app')
</script>

@endpush