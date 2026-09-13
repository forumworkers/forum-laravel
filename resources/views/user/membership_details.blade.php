@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')




<style>
	.c-dashboardInfo {
		margin-bottom: 15px;
	}
	.c-dashboardInfo .wrap {
		background: #ffffff;
		box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
		border-radius: 7px;
		text-align: center;
		position: relative;
		overflow: hidden;
		padding: 40px 25px 20px;
		height: 100%;
	}
	.c-dashboardInfo__title,
	.c-dashboardInfo__subInfo {
		color: #6c6c6c;
		font-size: 1.18em;
	}
	.c-dashboardInfo span {
		display: block;
	}
	.c-dashboardInfo__count {
		font-weight: 600;
		font-size: 2.5em;
		line-height: 64px;
		color: #323c43;
	}
	.c-dashboardInfo .wrap:after {
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 10px;
		content: "";
	}

	.c-dashboardInfo:nth-child(1) .wrap:after {
		background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
	}
	.c-dashboardInfo:nth-child(2) .wrap:after {
		background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
	}
	.c-dashboardInfo:nth-child(3) .wrap:after {
		background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
	}
	.c-dashboardInfo:nth-child(4) .wrap:after {
		background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
	}
	.c-dashboardInfo__title svg {
		color: #d7d7d7;
		margin-left: 5px;
	}
	.MuiSvgIcon-root-19 {
		fill: currentColor;
		width: 1em;
		height: 1em;
		display: inline-block;
		font-size: 24px;
		transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
		user-select: none;
		flex-shrink: 0;
	}
	.c-dashboardInfo{
		width: 35%;
	}
</style>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">


		<div class="col-12">

			<h4 class="bg bg-success">

				<p class="text-white">
					Bienvenido: 
					<br>
					Visitaste el Foro en: 
				</p>

			</h4>

			@if(Auth::user()->statu_id == 0) 
			<div class="card-body">

				<h1>Activa tu cuenta</h1>

				<p>Activa tu cuenta con el email y realiza el proceso de verificación para acceder a todas las funcionalidades</p>
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


			@if(Auth::user()->statu_id == 0 && Auth::user()->is_verified == 0) 
			<div class="card-body">

				<h1>Activa tu cuenta</h1>

				<p>Activa tu cuenta con el email y realiza el proceso de verificación para acceder a todas las funcionalidades</p>
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


			@if(Auth::user()->statu_id == 1 && Auth::user()->is_verified == 1)
			<div class="card-body bg-white">



				<div class="container">

					<h1>Tu cuenta está activada</h1>

					<p>Explora el potencial del Foro</p>

					<h1>Adquiere un plan de Membresia Premiun</h1>
					<br>
					<h2>Aumenta de 5 a 20 temas publicados</h2>

					<h2 class="bg-info text-white">Metodo 1 Pago con Paypal</h2>

					<div class="row">

						{{-- <h1>Adquiere un plan de Membresia Premiun</h1>

							<br> --}}

							{{-- 	<h2 class="bg-info text-white">Metodo 1 Pago con Paypal</h2> --}}

							<div class="card-body">

								{{-- <h1 class="bg-info text-white">Membresias y precios</h1> --}}
								<br>

								<div class="container">

									@foreach($memberships as $membership)					



									<h2>{{ $membership->membership }}</h2>
									<hr>

									<h2>{{ $membership->price.'$' }}</h2>
									<br>

									<a href="/checkout/{{ $membership->membership_id }}" class="btn btn-info">Ir al checkout</a>				



									@endforeach

								</div>

								<h2 class="bg-info text-white">Metodo 2 Transferencia via Airtm</h2>

								<ul>
									<li>Enviar el monto total, con el nombre del plan de membresia que desea adquirir al email <b>negocioswebcastro@hotmail.com</b></li>
									<li>Indicar el número de referencia</li>
									<li>Indicar el nombre del usuario que desea agregar la membresia</li>

								</ul>

							</div>



							{{-- <a href="/checkout/<?php echo $coursesb->id_course; ?>" class="btn btn-info">Ir al checkout</a>	 --}}	

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

					</div class="">
					{{--  @if($membershipsusers)  --}}
					<h4>Historial de Compras</h4>
					{{--  @endif --}}

					@foreach($membershipsusers as $membership)


					<h2>{{ $membership->membership }}</h2>
					<hr>
					<h2>{{ $membership->price }}</h2>
					<hr>
					{{ date('d-m-Y',strtotime($membership->created_at)) }}
					<hr>

					@endforeach	

					<div>
						  @if(!empty($memtime)) 
						<h4>Membresia Activas</h4>

						<h2>{{ 'Expira en: '.$memtime }}</h2>

						  @endif

					



					</div>

					{{-- end container --}}

				</div>


				@endif


			</div>







		</div>
	</div>




	@endsection 






