@extends('layouts/app')

@section('meta')

<title>{{ 'Contacto | Foroworkers.com' }}</title> 

<link rel="canonical" href="https://foroworkers.com/contacto" />

<meta name="description" content="Contacto en foroworkers.com, encuentra un experto en posicionamiento SEO">

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

				<h1 class="display-4">Contacto ForoWorkers.com</h1>
				<hr>
				<p>¿Está buscando un desarrollador web o especialista SEO?, instructor online, desarrollador freelance o presencial especializado en symfony, laravel, codeigniter, nodejs, vuejs, contáctame al siguiente correo escucho tu idea, contacto@foroworkers.com</p>
				<br>


			</div>
		</div>

	</div>
	

</div> {{-- end row --}}

 @include('inc/footer')
@endsection 



