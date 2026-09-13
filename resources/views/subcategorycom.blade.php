@extends('layouts/app')

@section('meta')

{{-- <title>{{ 'Comunidad'.' - '.$categorys[0]['maincategory_name'] }}</title>  --}}

@if(!empty($mmaincategorys))

<title>{{ $mmaincategorys->maincategory_name.' - '.'Comunidad' }}</title> 


<link rel="canonical" href="https://foroworkers.com/comunidad/{{$mmaincategorys->maincategory_url}}" />

<meta name="description" content="Comunidad del Foro encuentra Cursos,Tutoriales, conversaciones de {{$mmaincategorys->maincategory_name}} en foroworkers.com">

<meta property="og:type" content="article" />
<meta property="og:title" content="{{ 'Comunidad'.' - '.$mmaincategorys->maincategory_name }}" />
<meta property="og:description" content="Comunidad del Foro encuentra Cursos,Tutoriales, conversaciones de {{$mmaincategorys->maincategory_name}} en foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/comunidad/{{$mmaincategorys->maincategory_url}}" /> 

@endif

{{-- <title>{{ $categorys[0]['maincategory_name'].' - '.'Comunidad' }}</title> 


<link rel="canonical" href="https://foroworkers.com/comunidad/{{$categorys[0]['maincategory_url']}}" />

<meta name="description" content="Comunidad del Foro encuentra Cursos,Tutoriales, conversaciones de {{$categorys[0]['maincategory_name']}} en foroworkers.com">

<meta property="og:type" content="article" />
<meta property="og:title" content="{{ 'Comunidad'.' - '.$categorys[0]['maincategory_name'] }}" />
<meta property="og:description" content="Comunidad del Foro encuentra Cursos,Tutoriales, conversaciones de {{$categorys[0]['maincategory_name']}} en foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/comunidad/{{$categorys[0]['maincategory_url']}}" />  --}}

@endsection 
{{-- @section('title','SubCategory') --}}
@section('content')

<style type="text/css">
	

	.custom-info {
		padding: 4px;			
	}


</style>

@include('inc/navbar')





<div class="row">

	<div class="container">

		{{-- <h1><?php
		 dd($categorys[0]['id']);
		
		  ?>
		 	
		</h1> --}}
		<div>

			@if(is_null($categorys[0]))

			
			<div class="bg-info text-center">
				<p>No hay temas publicados en la comunidad {{$mmaincategorys->maincategory_name}}</p>
			</div>

			

			@endif
			{{-- <a href="/forum/{{$categorys[0]['maincategory_url']}}/{{$categorys[0]['id']}}/post-thread" class="btn btn-warning">Ofertas Gratuitas de {{$categorys[0]['maincategory_name']}} </a> --}}

			@if(!empty($categorys[0]))

			{{-- <a href="/forum/ofertas/{{$categorys[0]['maincategory_url']}}" class="fa-solid fa-eye btn btn-info">Ofertas Gratuitas de {{$categorys[0]['maincategory_name']}} </a> --}}
			<h1 class="h1 bg-white">{{$categorys[0]['maincategory_name']}} Comunidad Tasa de Café cerca de usted</h1>

			<p class="lead">Cursos, Tutoriales, Guías, Recursos a tu alcance de {{$categorys[0]['maincategory_name']}}</p>

			<h2>Sitios Recomendados sobre {{$categorys[0]['maincategory_name']}}</h2>

			<br>
			<div class="row">
				<div class="offset-3">
					

					@if($categorys[0]->promo_video)

					<h3>Nuevo Video de {{$categorys[0]['maincategory_name']}}</h3>
						<hr>				



						{{-- <iframe width="560" height="315" src="{{$categorys[0]->promo_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}

						<iframe class="embed-responsive" width="420" height="345"  src="{{$categorys[0]->promo_video}}?autoplay=1&mute=1" allow="autoplay"> </iframe>
						<br>								

						@endif
					</div>
				</div>

				<form class="form-horizontal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
					<input type='hidden' name='business' value='sb-dmymh19134302@business.example.com'>
					{{-- <input type='hidden' name='item_name' value='<?php echo 'Curso '.$course->name; ?>'> --}}

					{{-- <input type='hidden' name='item_name' value='{{ 'Membresia'.$membership->membership }}'> --}}
					<div class="col-4">
						<input type='text' class="form-control" name='item_name' placeholder="agrega tu URL (https://)">
					</div>



					{{-- {{ 'Membresia: '.$membership->membership }} --}}
					<input type='hidden' name='item_number' value="1">
					{{-- <input type='hidden' name='amount' value='{{$membership->price}}'> --}}
					<input type='hidden' name='amount' value='10'>
					<input type='hidden' name='currency_code' value='USD'>
					{{-- 	<input type='hidden' name='notify_url' value=''> --}}

					{{-- <input type='hidden' name='return' value='http://127.0.0.1:8000/success?membership_id={{$membership->membership_id}}'> --}}
					<input type='hidden' name='return' value='http://127.0.0.1:8000/complete?maincategory_id={{$maincategorys}}'>   
					<input type='hidden' name='cancel_return' value='{{ route('abort') }}'>

					<input type="hidden" name="no_shipping" value="1">
					
					<input type="hidden" name="cmd" value="_xclick">
					{{-- <input type="hidden" name="order" value="{{$membership->membership_id}}"> --}}
					<input type="hidden" name="order" value="1">
					<br>
					<div class="form-group">
						<div class="col-sm-2">
							<input type="submit" class="btn btn-lg btn-block btn-info" name="continue_payment" value="Pay Now">

						</div>

					</div>

					<div class="bg-white">
						@foreach($backlinks as $backlink)

						<ul>							

							<li><a href="{{ $backlink->backlink_url }}" target="_blank">{{  $web_name = substr($backlink->backlink_url, 8)}} </a></li>
							


						</ul>

						@endforeach
					</div>



					@endif
{{-- 
	<h4><a href="/forum/{{ $category->maincategory_url  }}" class="">{{ $category->maincategory_name }}</a></h4> --}}
</div>
<br>

@if(Auth::user())

{{-- @if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1 && Auth::user()->is_verified == 1) --}}
@if(Auth::user()->statu_id == 1 && Auth::user()->is_banned == 0)

{{-- 	<h1>{{Auth::user()}}</h1> --}}

{{-- @if(!empty($categorys[0])) --}}

@if(!empty($mmaincategorys))

{{-- <a href="/comunidad/{{$categorys[0]['maincategory_url']}}/{{$categorys[0]['id']}}/post-thread" class="fa-solid fa-pen-to-square btn btn-warning">Publicar Tema</a> --}}

<a href="/comunidad/{{$mmaincategorys->maincategory_url}}/{{$mmaincategorys->id}}/post-thread" class="fa-solid fa-pen-to-square btn btn-warning">Publicar Tema</a>

@endif

@endif

@endif


<div class="container">
	<!--Navigation-->
	<div class="navigate">

		@if(!empty($categorys[0]))

		@if($categorys[0]->subcategory_id == 3)
		{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span> --}}
		<span><a href="">{{ 'Comunidad' }}</a> >> <a href="">{{ $categorys[0]->maincategory_name }}</a></span>
		@endif

		{{-- @if($categorys[0]->subcategory_id == 2)
		
		<span><a href="">{{ 'Servicios' }}</a> >> <a href="">{{ $categorys[0]->maincategory_name }}</a></span>
		@endif --}}

		@endif

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

				@foreach($categorys as $category)
				<div class="table-row">
					{{-- <div class="status"><i class="fa fa-fire"></i></div> --}}
					<div class="status"><a href="/members/{{ $category->username }}/{{ $category->userid }}"><img src="{{URL('storage/uploads')}}/{{$category->img}}" class="img-thumbnail" alt="Cinque Terre"></a></div>
					<div class="subjects">
						{{-- <span class="{{$category->type_color}} text-white custom-info">{{$category->type_name}}</span> --}}
						<span class="{{$category->content_color}} text-white custom-info">{{$category->content_name}}</span>
						<a href="/comunidad/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>
						<br>
						<span>Started by <b><a href="/members/{{ $category->username }}/{{ $category->userid }}">{{ $category->username }}</a></b> .</span>
						{{-- <br> --}}
						{{-- <br><span class="">on {{ date('d-m-Y',strtotime($category->updated_at)) }}</span> --}}
						<br><span class="">on {{ date('d-m-Y',strtotime($category->created_at)) }}</span>
					</div>
					<div class="replies">
						{{-- 2 replies <br> 125 views --}}
						{{$category->views}} <br> views
					</div>

					<div class="last-reply">
						{{ date('d-m-Y',strtotime($category->updated_at)) }}
						<br>Last Reply
						{{-- <br>By <b><a href="">User</a></b> --}}
					</div>
				</div>
				@endforeach
				<!--starts here-->

				<!--ends here-->
			</div>
			{{-- @endforeach --}}

			<!--Pagination starts-->
			<div class="pagination">
				{{-- pages: <a href="">1</a><a href="">2</a><a href="">3</a> --}}
				{!! $categorys->links() !!}
			</div>
			<!--pagination ends-->
		</div>






	</div> 

</div>

@include('inc/footer')

@endsection 






