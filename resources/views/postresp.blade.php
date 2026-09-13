@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')



<div class="">

	<div class="container">

		{{-- <h1><?php
		 dd($categorys[0]['id']);
		
		  ?>
		 	
		</h1> --}}

		<h1>{{$post->post_name}}</h1>


		<div>


			<div class="row">
				<div class="col-4">

					<p>{{$post->username}}</p>
					<a href="/conversation/{{$post->username}}/{{$post->postid}}/message-thread" class="btn btn-warning">Contactar</a>
				</div>

				<div class="col-4">
					{{-- {{  htmlspecialchars($post->post_content) }}

					{{  html_entity_decode($post->post_content)  }}

					{{  $post->post_content  }} --}}

					<?php print_r($post->post_content)?>



				</div>

			</div>

		</div>
		


	</div> 

</div>

@endsection 







