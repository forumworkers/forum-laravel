@extends('layouts/app')
{{-- @section('title','Home') --}}
@section('meta')

<title>{{ 'Miembro'.' - '.$member->username}}</title> 

<link rel="canonical" href="https://foroworkers.com/members/{{$member->username}}/{{$member->id}}" />

<meta name="description" content="Miembro del Foro: {{$member->username.$member->id}} Usuario Activo de foroworkers.com">

<meta property="og:type" content="article" />
<meta property="og:title" content="{{ 'Miembro'.' - '.$member->username}}" />
<meta property="og:description" content="Miembro del Foro: {{$member->username.$member->id}} Usuario Activo de foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/members/{{$member->username}}/{{$member->id}}" /> 

@endsection 
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
{{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}

{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> --}}

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
	$( function() {
		$( "#tabs" ).tabs();
	} );
</script>
@include('inc/navbar')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<style type="text/css">
	

	.custom-img {
			/*height: auto;
			width: auto;*/
			max-width: 500px;
			height: 100px;
			border: 2px solid black;
			border-radius: 5px;
		}


		
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>



	<div class="row">

		<div class="container bg-white">

			{{-- <img src="{{URL('images/userbanner.png')}}" class="rounded" alt="Cinque Terre"> --}}
			@if($member)
			{{-- <img src="{{URL('images/user.png')}}" class="rounded" alt="Cinque Terre"> --}}


			<img src="{{URL('storage/uploads')}}/{{$member->img}}" alt="" class="custom-img">			
			@if($member->is_banned == 1)
			<br>
			<i class="fa-solid fa-x bg-danger display-4 text-white">Baneado</i>
			@endif
			<p>{{ $member->username }}</p>
		
			<img src="{{URL('images/flags')}}/{{$member->country_flag}}" alt="" class="custom-img">
			<p>Locación:{{$member->country_name}}</p>
			{{-- <p>Desde:{{ $member->created_at }}</p> --}}
			<p>Desde:{{ date('d-m-Y',strtotime($member->created_at)) }}</p>
			<a href="{{ $member->url_profile }}" rel="nofollow"  class="fa-solid fa-user-tie btn btn-primary btn-lg" target="_blank">Usuario</a>

			
        	{{-- <div class="">{{$member->country_name}}</div> --}}
			@endif

			<div class="row">

				<div id="msg_notification">
				</div>

				@if(Auth::user())

			{{-- <a class="btn btn-danger text-white" onclick="membersIgnored({{ $id }})" >
				<span class="fas fa-arrow-right"></span>		
			Bloquear</a> --}}
			<a class="btn btn-danger text-white" href="/members/ignored/{{$id}}">
				<span class="fas fa-arrow-right"></span>		
			Bloquear</a>
			<br>
			<a class="btn btn-primary text-white" href="/members/dignored/{{$id}}">
				<span class="fas fa-arrow-right"></span>		
			Desbloquear</a>
			{{-- <a class="btn btn-primary" onclick="membersDignored({{ $id }})">
				<span class="fas fa-arrow-right"></span>		
			Desbloquear</a> --}}

			@endif

		</div>

		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Recomendaciones</a></li>
				<li><a href="#tabs-2">Vendedor: Calificaciones Recibidas</a></li>
				<li><a href="#tabs-3">Comprador: Review Recibidos</a></li>
			</ul>
			<div id="tabs-1">

				<p>Antes de negociar con este usuario examina su historial de negocios como vendedor y comprador</p>
				

			</div>
			<div id="tabs-2">
				@if($califications)
				

				@foreach($califications as $calification)
				<div class="table-row">					
					
					<i class="{{ $calification->calification_icon }} display-4"><span class="bg-info"></span></i>

					<br>

					{{-- <span class="display-4">{{ $calification->post_name }}</span> --}}

					<div class="display-4"><a target="_blank" href="/temas/{{ $calification->url_name }}/{{ $calification->maincategory_id }}/{{ $calification->postid }}">{{$calification->post_name}}</a></div>
				</div>
				<div class="replies">
					<span class="display-4">{{ $calification->review }}</span>

					<div class="username"> <b>By </b><a target="_blank" href="/members/{{ $calification->username_client }}/{{ $calification->user_id_client }}">{{$calification->username_client}}</a></div>
					
				</div>
				

				<div class="last-reply">

					<p class="">on {{ date('d-m-Y',strtotime($calification->created_at)) }}</p>
					{{-- <br>By <b><a href="">User</a></b> --}}
				</div>
				
				<hr>
				@endforeach
				<div class="pagination">

					{{-- {!! $califications->links() !!} --}}
				</div>

				@endif
			</div>
			<div id="tabs-3">
				@if($calificationsbuyer)

				@foreach($calificationsbuyer as $calification)
				<div class="table-row">
					
					{{-- <i class="fa-solid fa-comment display-4"><span class="bg-info"></span></i> --}}

					<i class="fa-solid fa-handshake display-4"><span class="bg-info"></span></i>

					

						{{-- <br>
						
							<span class="display-4">{{ $calification->post_name }}</span> --}}
						</div>
						<div class="replies">
							<span class="display-4">{{ $calification->review_back }}</span>

							<div class="username"> <b>By </b><a target="_blank" href="/members/{{ $calification->username_post }}/{{ $calification->user_id }}">{{$calification->username_post}}</a></div>

						</div>

						<div class="last-reply">

							<p class="">on {{ date('d-m-Y',strtotime($calification->created_at)) }}</p>
							{{-- <br>By <b><a href="">User</a></b> --}}
						</div>

						<hr>
						@endforeach
						<div class="pagination">

							{!! $calificationsbuyer->links() !!}
						</div>

						@endif
					</div>
				</div>

			</div>


		</div> {{-- end row --}}


{{-- 		<script type="text/javascript">
			
			function membersIgnored(id)
			{ 

				// alert(id);


				$.ajax({
					// url: BASE_URL + '/members/ignored'+id, 
					url: 'http://127.0.0.1:8000' + '/api/members/ignored/'+id,     
					// dataType: 'json',
					type: 'GET'    
				})
				.done(function(result) {      

					// console.log(result);

					// alert(result);

					$("#msg_notification").html('<p>Ya no recibiras mensajes de este Usuario</p>');

      // chartData(result);

  });


			}

			
			function membersDignored(id)
			{ 

				// alert(id);


				$.ajax({
					// url: BASE_URL + '/members/ignored'+id,
					url: BASE_URL + '/api/members/dignored/'+id,    
					// url: 'http://127.0.0.1:8000' + '/api/members/dignored/'+id,     
					// dataType: 'json',
					type: 'GET'    
				})
				.done(function(result) {      

					// console.log(result);

					// alert(result);

					$("#msg_notification").html('<p>Recibiras mensajes de este Usuario</p>');

      // chartData(result);

  });


			}
		</script> --}}


		@endsection 



{{-- @endforeach

</div>

<div class="row">

<h3>Servicios</h3>

@foreach ($categorys1 as $category)

<div class="col-12">
<p>{{ $category->maincategory_name }}</p>
</div>

@endforeach

</div>

@endsection --}}

