@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.editor{
		/*	margin-top: 350px;*/
			/*height: 100px;*/
		}
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>

	<div class="">

		<div class="container">

			{{-- <h1 class="bg-white">Calificar al Usuario: {{$username}}</h1>
			<h2 class="bg-info">Url del Negocio: {{$post->url_name}}</h2> --}}

			{{-- <a href="" class="btn btn-warning">Publicar Tema</a> --}}

			  <h1 class="text-white display-4">Tienes una calificacion pendiente con: {{ $user->username }}:¿Has hecho negocios con este usuario?</h1>

			  <h2 class="bg-info text-white">Negocio: {{ $califications->post_name }}</h2>



			<div class="bg-white">

				<div class="col-8 offset-2">

					<br>
					<br>
					<br>	

					<form action="{{ route('storecalifications') }}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}

 
						{{-- <input type="hidden" name="username" id="username" value="{{$username}}"> --}}

					<input type="hidden" name="calification_id" id="calification_id" value="{{$calificationid}}">

					

					{{-- 	<div id="editor"></div> --}}

					<label>Dejar una Reseña:</label>

					<textarea name="review_back" class="form-control editor">

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






