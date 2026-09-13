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
			<a href="/forum/{{$categorys[0]['maincategory_url']}}/{{$categorys[0]['id']}}/post-thread" class="btn btn-warning">Ofertas Gratuitas de {{$categorys[0]['maincategory_name']}} </a>
		</div>
		<br>

		@if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1)

		{{-- 	<h1>{{Auth::user()}}</h1> --}}

		<a href="/forum/{{$categorys[0]['maincategory_url']}}/{{$categorys[0]['id']}}/post-thread" class="btn btn-warning">Publicar Tema</a>

		@endif



		<div class="bg-white">

			<div class="col-8">				
				

				<table class="table table-responsive table-bordered table-striped" id="myTable">				
					<thead>
						<tr>
							{{-- <th>Me Ofrezco</th>
							<th>Repuestas</th>
							<th>Visitas</th> --}}
						{{-- <th>Created_at</th>
						<th>Updated_at</th>
						<th>Deleted_at</th> --}}
						{{-- <th>Actions</th> --}}
					</tr>
				</thead>
				<tbody>

					{{-- da error end file si se deja espacio en foreach --}}
					@foreach($categorys as $category)


					<tr>
						<td><img src="{{URL('images')}}/{{$category->img}}" class="img-thumbnail" alt="Cinque Terre"></td>
						{{-- <td>{{ $category->post_name }}</td> --}}
						<td><a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}" class="">{{ $category->post_name }}</a></td>
						<td>Repuestas</td>
						<td>Visitas</td>
							{{-- <td></td>
							<td></td>
							<td></td> --}}
							<td>
								<a href="/members/{{ $category->username }}/{{ $category->userid }}" class="btn btn-success btn-sm">{{ $category->username }}</a>
								<img src="{{URL('images')}}/{{$category->img}}" class="img-thumbnail" alt="Cinque Terre">
								
							</td>
						</tr>					

						@endforeach

					</tbody>
				</table>

			</div>




		</div>


	</div> 

</div>

@endsection 






