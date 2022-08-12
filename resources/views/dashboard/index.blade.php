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

</style>

	<div>
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