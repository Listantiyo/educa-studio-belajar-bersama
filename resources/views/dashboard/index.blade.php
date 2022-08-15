@extends('layouts.master')   

@section('content')


<style>
	.nav-link{
		color: #0c0d0e;
	}

	.nav-link:hover {
		color: #0c0d0e;
	}

	.nav-pills .nav-link.active,.nav-pills .show>.nav-link{
		background-color: #ebf2f7 !important;
		color: #0c0d0e;
		border-radius: 10px;
	}

	.font-bold{
		font-weight: 700;
	}

    .card {
        position: static !important;
    }

</style>

	<div id="app">
		<!-- Start Mail Content Area -->
		<div class="main-content-area py-5">
			<div class="container">
				<div class="row">

					{{-- left sidebar --}}
					@include('dashboard.left_sidebar')
					{{-- end --}}

					{{-- Start middle content --}}
					@include('dashboard.content')
					{{-- End--}}

					{{-- Sidebar Right --}}
					@include('dashboard.right_sidebar')
					{{-- End sidebar right --}}
				</div>
			</div>
		</div>
		<!-- End Mail Content Area -->


	</div>

@endsection

@push('scripts')
<script src={{ asset('vue/vue.global.js') }}></script>
<script>
    const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                quest :'',
                // classe :'',
                // type  :'',
            }
        },mounted() {
            
            var classe ='';
            var type ='';
            var dt ='';

            $(document).ready(function (e) {
            
                $.ajax({
                    url: "/api/data/q",
                    success: function(rsp){
                        vues.quest = rsp ;
                    }
                });

                $("button").click(function (e) {
                    e.preventDefault(); 
                        dt = $(this).val();

                        $.get("api/data/q",{mapel:dt,clas:classe,type:type},
                            function (data) {
                                vues.quest = data 
                            },
                        );
                });

                $(".filter").change(function (e) { 
                    e.preventDefault();
                        classe = $("#class").val();
                        type = $("#type").val();

                        $.get("api/data/q",{mapel:dt,clas:classe,type:type},
                        function (data) {
                            vues.quest = data 
                        },
                    );
                });

        });
            
        },
    }).mount('#app') 
</script>
@endpush