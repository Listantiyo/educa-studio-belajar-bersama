@extends('layouts.master')

@section('content')
<div class="middull-content">
    <ul class="page-nish">
        <li>
            <a href="index.html">
                <i class="ri-home-8-line"></i>
                Home
            </a>
        </li>
        <li class="active">
            Tags
        </li>
    </ul>

    <form class="aq-form">
        <i class="ri-search-line"></i>
        <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
        <button class="aq-btn">
            Ask Question
        </button>
    </form>

    <div class="tag-content">
        <div class="row justify-content-center">
            <div v-for="tags in tags" class="col-lg-6 col-md-6">
                <div class="single-tags-box">
                    <ul class="tag-mark">
                        <li>
                            <i class="ri-price-tag-3-line"></i>
                            <span>@{{tags.tag}}</span>
                        </li>
                        <li>
                            1984 questions
                        </li>
                    </ul>
                    <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.</p>
                    <ul class="tag-btn d-flex justify-content-between">
                        <li>
                            <button class="default-btn">
                                325 Followers
                            </button>
                        </li>
                        <li>
                    
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 text-center mb-2"> <p>@{{current_page}} of @{{last_page}}</p> </div>
            <div class="col-12 px-5">
                <div class="pagination-area mt-0 row">
                    <a href="tags.html" style="border: 1px solid #eeeeee;height:2rem ;padding: 0.25rem!important;" class="col-2 text-center">
                        First
                    </a>

                    <a href="tags.html" style="border: 1px solid #eeeeee;height:2rem ;padding: 0.25rem!important;" class="col-1 ms-1 text-center" >
                        <i class="ri-arrow-left-line"></i>
                    </a>

                    <div class="col d-flex">
                        <input type="text" class="" style="border: 1px solid #eeeeee; height:2rem; width:auto;" :placeholder="">
                        <button type="text" class="" style="border: 1px solid #eeeeee; height:2rem; width:100%;" ><b>GO</b></button>
                    </div>

                    <a href="tags.html" style="border: 1px solid #eeeeee;height:2rem;padding: 0.25rem!important;" class="col-1 me-1 text-center">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                    <a href="tags.html" style="border: 1px solid #eeeeee;height:2rem;padding: 0.25rem!important;" class="col-2 text-center">
                        Last
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>


    const vues = Vue.createApp({
        data() {
            return {
                tags :'',
                first_page_url :'',
                last_page_url:'',
                prev_page_url:'',
                next_page_url:'',
                last_page:'',
                current_page:'',
            }
        },mounted() {
            $(document).ready(function () {
                
                $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    dataType: "json",
                    url: "/api/tag/show",
                    success: function (rsp) {
                        console.log(rsp);   
                        vues.tags = rsp.data
                        vues.first_page_url = rsp.first_page_url
                        vues.last_page_url = rsp.last_page_url
                        vues.last_page = rsp.last_page
                        vues.prev_page_url = rsp.prev_page_url
                        vues.next_page_url = rsp.next_page_url
                        vues.current_page = rsp.current_page
                    }
                });

            });
        },
    }).mount('#app')
</script>
@endpush