@extends('layouts/app')

@section('meta')

<title>{{ 'Complete' }}</title> 

<link rel="canonical" href="https://foroworkers.com/complete" />

<meta name="description" content="Compras de recursos en foroworkers.com">

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

				<h1 class="display-4">Completar Compra</h1>
				<hr>
				<p class="bg-success">Hola,tu compra sera revisada y en caso de cumplir las normas del sitio sera publicada . </p>
				<br>


			</div>
		</div>

	</div>
	

</div> {{-- end row --}}


@endsection 



