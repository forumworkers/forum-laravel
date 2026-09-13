@extends('layouts/app')

@section('meta')

<title>{{ 'Cursos de Programación' }} | {{$courses->course_name}}</title>


<link rel="canonical" href="https://foroworkers.com/cursos/{{$courses->course_url}}" />




<meta name="description" content="Curso {{$courses->course_name}} en foroworkers.com">

<meta property="og:type" content="website" />



<meta property="og:title" content="{{ 'Cursos de Programación' }} | {{$courses->course_name}}" />


<meta property="og:description" content="urso {{$courses->course_name}} en foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/cursos/{{$courses->course_url}}" /> 

@endsection 
{{-- @section('title','Home') --}}
@section('content')

<style type="text/css">
	
	p{
		font-size: 18px;	
	}

</style>

@include('inc/navbar')



<div class="row">

	{{-- <ul>
		<li>PHP estructurado y orientado a objetos desde 0 con PHP 8</li>
		<li>¿Qué es PHP?, aprenderemos este importante concepto</li>
		<li>LAMP Stack, Utilizar Linux, Apache, MySQL, PHP creando aplicaciones web</li>
		<li>Crear un CRUD con PHP</li>
	</ul> --}}

	<div class="container">

		<div class="col-6">

			<img src="{{URL('public/images/cursos')}}/{{ $courses->course_img }}" alt="{{$courses->course_name}}" class="img-fluid">
			
			<br>

			<h1 class="display-4">{{$courses->course_name}}</h1>
			<br>
			{!! $courses->course_content !!}	

		</div>

		<div class="col-4">

			@foreach($pensums as $pensum)

			<div class="ubforum-row">

				<div class="ubforum-description subforum-column">


					<h4><i class="{{ $pensum->course_icon  }}"></i><a href="/curso/{{ $pensum->course_url  }}/{{ $pensum->pensum_url  }}" class="">{{ $pensum->pensum_name }}</a></h4>

				</div>


			</div>


			@endforeach


		</div>

		{!! $courses->course_body !!}	



	</div>


</div> {{-- end row --}}


@include('inc/footer')
@endsection 



