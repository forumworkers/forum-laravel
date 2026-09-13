@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')




<style>
	

	.custom-img {
			/*height: auto;
			width: auto;*/
			max-width: 500px;
			height: 100px;
			border: 2px solid black;
			border-radius: 5px;
		}
	

</style>


<div class="row">

	<div class="bg-white col-8 offset-2">

				@if(Auth::user()->statu_id == 0) 
			<div class="card-body">

				<h1>Activa tu cuenta</h1>

				<p>Activa tu cuenta con el email y realiza el proceso de verificación para acceder a todas las funcionalidades</p>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

			</div>
			@endif


			@if(Auth::user()->statu_id == 0 && Auth::user()->is_verified == 0) 
			<div class="card-body">

				<h1>Activa tu cuenta</h1>

				<p>Activa tu cuenta con el email y realiza el proceso de verificación para acceder a todas las funcionalidades</p>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

			</div>
			@endif

		<br>

		@if(Auth::user()->statu_id == 1 && Auth::user()->is_verified == 1)

		<h1 class="display-4">Mi Información</h1>
		<hr>
		<br>

	{{-- 	<label>Imagen:</label> --}}

		{{-- <img src="{{URL('storage/app/public/uploads')}}/{{$user->img}}" alt="" class="img-fluid"> --}}

		<img src="{{URL('storage/uploads')}}/{{$user->img}}" alt="" class="custom-img">

	{{-- 	<img src="{{ asset("storage")}}/{{$user->img}}" alt="" class="img-fluid"> --}}

		<br>

		<label>Username:</label>

		<h1>{{$user->username}}</h1>

		<br>

		<label>Email:</label>

		<h1>{{$user->email}}</h1>

		<br>

		<label>Patreon Nick:</label>

		<h1>{{$user->url_patreon}}</h1>

		<br>

		<label>Pais:</label>

		<h1>{{$user->country_name}}</h1>

		<br>

		<label>Rango:</label>

		<h1>{{$user->rank_name}}</h1>

		<br>


		<label>Tema:</label>

		<h1>{{$user->theme_color}}</h1>

		<br>
		<hr>

		<h1>Configuraciones:</h1>
		


		<form action="{{ route('setting.store') }}" enctype="multipart/form-data" method="POST">
			{{csrf_field()}}

			{{-- <div class="col-lg-10 offset-2"> --}}

				@if(!$user->url_patreon)
				<label>https://www.patreon.com/
				<input type="text" class="form-control form-control-user" name="url_patreon" id="url_patreon"  placeholder="nick patreon" >
				</label>
				
				@endif

				@if($user->url_patreon)
				<label>https://www.patreon.com/
				<input type="text" class="form-control form-control-user" name="url_patreon" id="url_patreon" value="{{$user->url_patreon }}" >
				</label>

				
				@endif

				<br>

				<label for="img">Imagen</option>  
					<input type="file" name="img">

					@if(Auth::user()->is_buyer == 0)


					<select class="form-control" name="rank_id" id="rank_id">

						<option value="1">Member</option>
						

					</select>

					@endif

					@if(Auth::user()->is_buyer == 1)


					<select class="form-control" name="rank_id" id="rank_id">

						<option value="1">Member</option>
						<option value="2">Programador</option>
						<option value="3">SEO</option>
						<option value="4">Marketer</option>
						<option value="5">Youtuber</option>
						<option value="6">Profesor</option>
						<option value="7">Instructor</option>

					</select>

					@endif

					@if(Auth::user()->is_buyer == 0)


					<select class="form-control" name="theme_color" id="theme_color">

					{{-- 	<option value="white">White</option> --}}
						<option value="gray">Gray</option>						

					</select>

					@endif

					@if(Auth::user()->is_buyer == 1)


					<select class="form-control" name="theme_color" id="theme_color">

						{{-- <option value="white">White</option> --}}
						<option value="gray">Gray</option>
						<option value="black">Black</option>
						<option value="white">White</option>	

					</select>

					@endif


					<select class="form-control" name="country_id" id="country_id">

						@foreach($countrys as $country)

						<option value="{{$country->id}}">{{$country->country_name}}</option>
						@endforeach	

					</select>


					<br>

					<button type="submit" class="btn btn-info">Send</button>

				{{-- </div>	 --}}


			</form> 
			<br>
			<br> 

			@endif


		</div>

	</div>




	@endsection 






