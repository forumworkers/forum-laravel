@extends('layouts/app')

@section('meta')

<title>{{ 'Sobre nosotros | Foroworkers.com' }}</title> 

<link rel="canonical" href="https://foroworkers.com/sobre-nosotros" />

<meta name="description" content="Sobre Nosotros en foroworkers.com, conoce nuestra misión">

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

	<div class="container">

		<div class="card">

			<div class="card-body">

				<h1 class="display-4">Sobre Nosotros</h1>
				<hr>
				<p>Hola, gracias por saber un poco sobre foroworkers.com, primero vayamos con un poco de historia :), foroworkers.com nace en el año 2024 con el propósito de brindar cursos, tutoriales y artículos de calidad, para todo tipo de público sin importar su origen, estatus social o edad, el conocimiento es gratuito y cualquiera puede aprender algo nuevo. </p>
				<br>


			</div>
		</div>

	</div>
	

</div> {{-- end row --}}


@endsection 



