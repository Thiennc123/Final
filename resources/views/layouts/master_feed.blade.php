<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="https://cdn.itviec.com/employers/nus-technology/logo/social/JgxNfFUBFMN9VB9ToTpNXsFG/nus-technology-logo.png">
	<title>@yield('title')</title>
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ url('css/NUS_Feeds.css') }}">
	<script src="https://kit.fontawesome.com/ac41dc8644.js" crossorigin="anonymous"></script>

	

	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- jquery validation -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script> -->
</head>
<body>
	<div class="container-fullwidth">
		<!-- menu -->
		<div class="menu d-inline ">
			<div class="row" style="background-color: #1929A0; color: white">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 offset-md-1 offset-sm-1 offset-lg-1 offset-xl-1 align-items-center">
					<a class="navbar-brand ml-20 pl-5 signup_title">Fotobook</a>
				</div>

				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 mt-2 align-items-center">
					<form class="form-inline">
						<input class="form-control w-75 ml-3" type="search" placeholder="Search Photo/Album" aria-label="Search">
					</form>
				</div>

				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-items-center">
					<p class="navbar-brand ml-20  signup_title mt-3" style="font-size: 15px;">Hello:@section('nameUser')MyFriend @show</p>
				</div>

				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-items-center">
					<a href="@section('link'){{url('login')}}@show" class="navbar-brand ml-20  signup_title mt-3" style="font-size: 15px; ">@section('hihi')Login
            
        @show</a>
				</div>
			</div>

		</div>
		
	 <div class="row" style = " background-color: #F0EFEF">
	 	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2  mt-5">
	 		<ul class="main_tab">
		 		

		 		@if(session('data')['userName'] == 'admin')
				<li class="tab_feeds active" data-ajax ="NUS_Feeds_feeds.html"><a href="@section('linkli1'){{url('Feeds_Photo')}}@show">Manage Photo</a></li>
		 		<li class="tab_photo" data-ajax ="NUS_Feeds_photos.html"><a href="@section('linkli2'){{url('MyPhoto/'.session('data')['id'])}}@show">Manage Album</a></li>
		 		<li class="tab_Album" data-ajax ="NUS_Feeds_feeds.html"><a href="{{route('Manage')}}">Manage User</a></li>

		 		@elseif(session('data')['userName'] !== 'admin')


		 		@endif
	 		</ul>
	 	</div>
	 	
	 	<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-5 bg-white mt-5 mb-5 min-vh-100">
	 		
	 		@section('main_content')
				@yield('content')
	 		@show()
			
			  
			  	

		</div>
			  
			  
			  
			  
		

	</div>

	 	


</div>


	<script src="{{ url('js/NUS_Feeds.js') }}"></script>
</body>
</html>