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

						{{-- 	<h2>Membresias precios</h2> --}}

						<div class="card-body">

							<p class="bg-danger text-white">Su pago ha sido cancelado</p>

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

				</div>

			</div>


			@endif


		</div>







	</div>
</div>




@endsection 






