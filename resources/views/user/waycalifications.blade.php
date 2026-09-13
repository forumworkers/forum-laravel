@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')


<div class="row">

	<div class="container">

		{{-- <h1><?php
		 dd($categorys[0]['id']);
		
		  ?>
		 	
		</h1> --}}
		<div>
			{{-- <a href="/forum/{{$categorys[0]['maincategory_url']}}/{{$categorys[0]['id']}}/post-thread" class="btn btn-warning">Ofertas Gratuitas de {{$categorys[0]['maincategory_name']}} </a> --}}
		</div>
		<br>

		{{-- @if(Auth::user()) --}}
{{-- 
		@if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1 || Auth::user()->is_buyer == 2) --}}

		{{-- @if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1) --}}

		{{-- 	<h1>{{Auth::user()}}</h1> --}}

		{{-- <a href="/forum/{{$categorys[0]['maincategory_url']}}/{{$categorys[0]['id']}}/post-thread" class="btn btn-warning">Publicar Tema</a> --}}

	{{-- 	@endif --}}

		{{-- @endif --}}


		<div class="container">
			<!--Navigation-->
			<div class="navigate">

				{{-- @if($categorys[0]->subcategory_id == 1) --}}
				{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span> --}}
			{{-- 	<span><a href="">{{ 'Propiedades Digitales' }}</a> >> <a href="">{{ $categorys[0]->maincategory_name }}</a></span> --}}
				{{-- @endif --}}

			{{-- 	@if($categorys[0]->subcategory_id == 2) --}}
				{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span> --}}
			{{-- 	<span><a href="">{{ 'Servicios' }}</a> >> <a href="">{{ $categorys[0]->maincategory_name }}</a></span> --}}
				{{-- @endif --}}

				{{-- <h1>{{ $categorys[0]->maincategory_name }}</h1> --}}
			</div>

			{{-- 	@foreach($categorys as $category) --}}

			<!--Display posts table-->
			<div class="posts-table">
				{{-- <div class="table-head">
					<div class="status">Status</div>
					<div class="subjects">Subjects</div>
					<div class="replies">Replies/Views</div>
					<div class="last-reply">Last Reply</div>
				</div> --}}

					

					  @if($califications)

					 {{--  <h1 class="text-white display-4">Tienes una calificacion pendiente con: {{ $user[0]->username }} :¿Has hecho negocios con este usuario?</h1> --}}
					  <h1 class="text-white display-4">Tienes calificaciones pendientes con estos usuarios :¿Has hecho negocios con estos usuarios?</h1>

					  <h2 class="bg-info text-white">Las Calificaciones seran secretas hasta que ambos negociantes den su feedback</h2>

				@foreach($califications as $calification)
				<div class="table-row">
					{{-- <div class="status"><i class="fa fa-fire"></i></div> --}}
					{{-- <div class="status"><a href="/members/{{ $message->username }}"><img src="{{URL('images')}}/{{$message->img}}" class="img-thumbnail" alt="Cinque Terre"></a></div> --}}
				{{-- 	<div class="status"><a href="/members/{{ $message->username }}"><img src="{{URL('images')}}/{{$message->img}}" class="img-thumbnail" alt="Cinque Terre"></a></div>
					<div class="subjects"> --}}
						{{-- <span class="bg-info">{{$category->type_name}}</span> --}}
						{{-- <a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>
 --}}
					{{-- 	<span class="bg-info">{{ $message->username }}</span> --}}
					{{--  <i class="{{ $calification->calification_icon }} display-4"><span class="bg-info"></span></i> --}}
						{{-- <a href="/conversations/{{$message->user_id_message}}">{{$message->post_name}}</a> --}}

						{{-- <h4><a href="/conversations/{!! $message->user_id_message !!}" title="">{!! $message->post_name !!}</a></h4> --}}
						<br>
						{{-- <span>Started by <b><a href="/members/{{ $category->username }}/{{ $category->userid }}">{{ $category->username }}</a></b> .</span> --}}
						{{-- <span class="text-white display-4">{{ $calification->review }}</span> --}}
						
							<a class="text-white" href="/users/califications/accept/{{ $calification->id }}">Aceptar y Dejar reseña</a>	
					</div>
					{{-- <div class="replies">
						<span class="text-white display-4">{{ $calification->review }}</span>
					
					</div>
 --}}
					{{-- <div class="last-reply">
					
					<p class="text-light">on {{ date('d-m-Y',strtotime($calification->created_at)) }}</p>
						<br>By <b><a href="">User</a></b>
					</div> --}}
				</div>
				@endforeach

				 @endif
				{{--  @else --}}
				
				<!--starts here-->

			{{-- 	sale mejor isset que empty --}}
				 @if( empty($califications))
						<div class="table-row">
					
					 <i class="display-4"><span class="bg-info text-white">No tiene calificaciones de negocios</span></i>
						
						<br>
						
					</div>

					 @endif

				<!--ends here-->
			</div>
			{{-- @endforeach --}}

			<!--Pagination starts-->
			<div class="pagination">
				pages: <a href="">1</a><a href="">2</a><a href="">3</a>
			</div>
			<!--pagination ends-->
		</div>






	</div> 

</div>





@endsection 






