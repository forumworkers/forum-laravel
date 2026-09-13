@extends('layouts/app')

@section('meta')

<title>{{ 'Abort' }}</title> 

<link rel="canonical" href="https://foroworkers.com/abort" />

<meta name="description" content="Compra de recursos cancelada">

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

				<h1 class="display-4">Cancelar Comprar</h1>
				<hr>
				<p class="bg-danger">Has cancelado la compra de algunos de nuestros productos, continuan navegando en el foro</p>
				<br>


			</div>
		</div>

	</div>
	

</div> {{-- end row --}}


@endsection 



