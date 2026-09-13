@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')




<style>

</style>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">


		<div class="col-12">

			<h4 class="bg bg-success">

				<p class="text-white">
					Bienvenido: 
					<br>
					Visitaste la academia en: 
				</p>

			</h4>

		
			@if(Auth::user()->statu_id == 0)
				<div class="card-body">

					<h1>Activa tu cuenta</h1>

					<p>Activa tu cuenta con el email de verificación para acceder a todas las funcionalidades</p>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

				</div>
			@endif


			@if(Auth::user()->statu_id == 1)
				<div class="card-body bg-white">



					<div class="container">

						<h1>Tu cuenta está activada</h1>

						<p>Explora el potencial del Foro</p>

						<div class="row">

							<div class="card-body">

				<h1 class="bg-success text-white">Checkout</h1>

				
				<br>

				<div class="container">


					<form class="form-horizontal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
						<input type='hidden' name='business' value='sb-dmymh19134302@business.example.com'>
						{{-- <input type='hidden' name='item_name' value='<?php echo 'Curso '.$course->name; ?>'> --}}

							<input type='hidden' name='item_name' value='{{ 'Membresia'.$membership->membership }}'>

						{{ 'Membresia: '.$membership->membership }}
						<input type='hidden' name='item_number' value="1">
						<input type='hidden' name='amount' value='{{$membership->price}}'>
						<input type='hidden' name='currency_code' value='USD'>
					{{-- 	<input type='hidden' name='notify_url' value=''> --}}
						
						<input type='hidden' name='return' value='http://127.0.0.1:8000/success?membership_id={{$membership->membership_id}}'> 
						<input type='hidden' name='cancel_return' value='{{ route('cancel') }}'>

						<input type="hidden" name="no_shipping" value="1">
					
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="order" value="{{$membership->membership_id}}">
						<br>
						<div class="form-group">
							<div class="col-sm-2">
								<input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pay Now">

							</div>

						</div>
				

					@endif					



				</div>	

						</div>

							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>				

						</div>

					</div>


	{{-- 		@endif --}}


			</div>







		</div>
	</div>




@endsection 






