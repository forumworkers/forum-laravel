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

				@foreach($messages as $message)
				<div class="table-row">
					{{-- <div class="status"><i class="fa fa-fire"></i></div> --}}
						<div class="status"><a href="/members/{{ $message->username }}"><img src="{{URL('storage/uploads')}}/{{$message->img}}" class="img-thumbnail" alt="Cinque Terre"></a></div>
					<div class="subjects">
						{{-- <span class="bg-info">{{$category->type_name}}</span> --}}
						{{-- <a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>
						--}}
						<span class="bg-info text-white">{{ $message->username }}</span>
					{{-- 	<span class="bg-info text-white">Nuevos Mensajes</span> --}}
						{{-- <a href="/conversations/{{$message->user_id_message}}">{{$message->post_name}}</a> --}}
					{{-- 	<a href="/conversations/{{$message->user_id}}/{{$message->user_id_message}}">{{$message->post_name}}</a> --}}
					<a href="/conversations/{{$message->user_id}}/{{$message->user_id_message}}/{{$message->post_id}}">{{$message->post_name}}</a>

						{{-- <h4><a href="/conversations/{!! $message->user_id_message !!}" title="">{!! $message->post_name !!}</a></h4> --}}
						<br>
						{{-- <span>Started by <b><a href="/members/{{ $category->username }}/{{ $category->userid }}">{{ $category->username }}</a></b> .</span> --}}
					</div>
					<div class="replies">
						{{-- 2 replies <br> 125 views --}}
						@if($message->read  == 1)						
					{{-- 	<i class="fa-solid fa-envelope-open"></i> --}}
						<span class="fa-solid fa-envelope-open display-4"></span>
						@endif

						@if($message->read  == 0)					
					{{-- 	<i class="fa-solid fa-envelope"></i> --}}
						<span class="fa-solid fa-envelope display-4"></span> {{-- <br> 125 views --}}
						@endif

					</div>

					<div class="last-reply">
						{{-- Oct 12 2021
						<br>By <b><a href="">User</a></b> --}}
						{{ date('d-m-Y',strtotime($message->created_at)) }}
							<br>Message Day
					</div>
				</div>
				@endforeach
				<!--starts here-->

				<!--ends here-->
			</div>
			{{-- @endforeach --}}

			<!--Pagination starts-->
			<div class="pagination">
				
				{!! $messages->links() !!}
			</div>
			<!--pagination ends-->
		</div>






	</div> 

</div>





@endsection 






