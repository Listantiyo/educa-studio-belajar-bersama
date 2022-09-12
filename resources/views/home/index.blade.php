@extends('layouts.master')   
@section('banner')
    @parent
    		<!-- Start Banner Area -->
		<div class="banner-area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-content">
							<h1>Pify</h1>
							<h3>Share & grow the world's <span>knowledge</span>!</h3>
							<p>We want to connect with people who will share their knowledge from one person to another.</p>
							<a {{-- href="user.html" --}} class="default-btn">
								Create a free team
							</a>
						</div>
					</div>

					<div class="col-lg-6 pe-0">
						<div class="banner-img">
							<img src="assets/images/banner/banner-img.png" alt="Image">
							<img src="assets/images/banner/shape-1.png" alt="Image" class="shape shape-1">
							<img src="assets/images/banner/shape-2.png" alt="Image" class="shape shape-2">
							<img src="assets/images/banner/shape-3.png" alt="Image" class="shape shape-3">
							<img src="assets/images/banner/shape-4.png" alt="Image" class="shape shape-4">
							<img src="assets/images/banner/shape-5.png" alt="Image" class="shape shape-5">
							<img src="assets/images/banner/shape-6.png" alt="Image" class="shape shape-6">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner Area -->
@endsection

@section('content')

		{{-- content --}}
		@include('home.content')
		{{-- content end --}}

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->
@endsection

@push('scripts')

<script>
	const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                quest :'',
                quest_most :'',
                quest_unans :'',
                quest_featur :'',
                id  : '',
            }
        },mounted() {

            var classe ='';
            var type ='';
            var dt ='';
            
            $(document).ready(function (e) {
				// load all question
                ajax = $.ajax({
                    url: "/api/menu/show",
					data: 'id='+1,
                    success: function(rsp){
						
                        vues.quest = rsp.question_all ;
                        vues.quest_most = rsp.question_most ;
                        vues.quest_unans = rsp.question_unans ;
                        vues.quest_featur = rsp.question_feature ;
						vues.id = rsp.id ;
                        
                    }
                 }); 

            });
            
        },methods: {
			filterQuest(id){
				alert(id)
				$.ajax({
                    url: "/api/menu/show",
					data:{id:id},
                    success: function(rsp){
						
                        vues.quest = rsp.question_all ;
                        vues.quest_most = rsp.question_most ;
                        vues.quest_unans = rsp.question_unans ;
                        vues.quest_featur = rsp.question_feature ;
                        vues.id = rsp.id ;
                        
                    }
                 }); 
			}
        },
    }).mount('#app') 
</script>

@endpush