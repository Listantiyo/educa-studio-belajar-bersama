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
							<a href="user.html" class="default-btn">
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
            
            $(document).ready(function (e) {
				// load all question
                ajax = $.ajax({
                    url: "/api/quest/show",
					data: 'id='+1,
                    success: function(rsp){
						
                        vues.quest = rsp.question_all ;
                        vues.quest_most = rsp.question_most ;
                        vues.quest_unans = rsp.question_unans ;
                        vues.quest_featur = rsp.question_feature ;
						vues.id = rsp.id ;
                        
                    }
                 }); 

                 // SearchBar

				$("#searchbar").keypress(function (e) { 
                    
                    if (e.which == 13) {
						e.preventDefault(); 
                        
                        var input = $("#searchbar").val();
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id},
                            function (data) {           

                                vues.quest = data.question_all ;
                                vues.quest_most = data.question_most ;
                                vues.quest_unans = data.question_unans ;
                                vues.quest_featur = data.question_feature ;
                                $("#searchbar").val(null);

                            },

                        );
                    }
                });

                $("#search-button").click(function (e) { 
                    e.preventDefault();

                    var input = $("#searchbar").val();
                        var id = vues.id;
                        $.get("/api/quest/search", {data:input,id:id},
                            function (data) {           

                                vues.quest = data.question_all ;
                                vues.quest_most = data.question_most ;
                                vues.quest_unans = data.question_unans ;
                                vues.quest_featur = data.question_feature ;
                                $("#searchbar").val(null);

                            },

                        );
                    
                 });

            });
            
        },methods: {
			filterQuest(id){
				// alert(id)
				$.ajax({
                    url: "/api/quest/show",
					data:{id:id},
                    success: function(rsp){
						
                        vues.quest = rsp.question_all ;
                        vues.quest_most = rsp.question_most ;
                        vues.quest_unans = rsp.question_unans ;
                        vues.quest_featur = rsp.question_feature ;
                        vues.id = rsp.id ;
                        
                    }
                 }); 
			},
            toAnswer(id){
                $(document).ready(function () {
                    
                    let url = "{{route('questions-details',':id')}}"
                    url = url.replace(':id',id)
                    alert(url)
                    location.href = url;
                });
            },
        },
    }).mount('#app') 
</script>

@endpush