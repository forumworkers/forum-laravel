@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.ck.ck-editor__editable_inline>:last-child {
			margin-bottom: 250px;
		}
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>

	<div class="">

		<div class="container">

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

			@if(Auth::user()->is_banned == 1)
			<p class="display-4">Baneado por incumplir las reglas del sitio</p>
			@endif

			@if(Auth::user()->statu_id == 1 && Auth::user()->is_verified == 1)

			@if(Auth::user()->is_banned == 0)

			{{-- 	<h1 class="bg-white">Iniciar una conversacion</h1> --}}
			<h1 class="bg-white">Contactar al Usuario: {{$username}}</h1>
			<h2 class="bg-info">Nombre del Negocio: {{$post->post_name}}</h2>

			{{-- <a href="" class="btn btn-warning">Publicar Tema</a> --}}



			<div class="bg-white">

				<div class="col-8 offset-2">

					<br>
					<br>
					<br>	

					<form action="{{ route('message.store') }}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}

					{{-- <input type="text" class="form-control form-control-user" name="post_name" id="postal_code"  placeholder="Post Name">

					<input type="text" class="form-control form-control-user" name="url_name" id="postal_code"  placeholder="Url"> --}}

					{{-- <select class="form-control" name="username" id="username">
						
						<option value="{{$username}}">{{$username}}</option>						     
					</select>

					<select class="form-control" name="post_id" id="post_id">
					
						<option value="{{$categoryid}}">{{$categoryid}}</option>						     
					</select> --}}

					<input type="hidden" name="username" id="username" value="{{$username}}">

					<input type="hidden" name="post_id" id="post_id" value="{{$categoryid}}">


					{{-- 	<div id="editor"></div> --}}
					@if($errors->has('message'))
					<div class="text-danger" id="msg_email">{{ $errors->first('message') }}</div>
					@endif 

					<textarea name="message" class="editor" id="editor">

					</textarea>


					{{--     end --}}
					<br>
					<div class="form-group">

						<div class="offset-2 col-sm-8" >                                       

							<button type="submit" class="btn btn-primary btn-user btn-block">Send</button>


							<br>
							<br>
							<br>

							<br>
							<br>
							<br>		

						</div>

					</div>   

				</form>       




			</div>




		</div>

		@endif

		@endif


	</div> 



</div>

<script>
	ClassicEditor
	.create( document.querySelector( '#editor' ) )
	.catch( error => {
		console.error( error );
	} );
</script>

@endsection 






