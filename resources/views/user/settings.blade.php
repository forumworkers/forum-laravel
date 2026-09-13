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
					Visitaste el foro en: 
				</p>

			</h4>

			@if(Auth::user()->role_id == 1) 
			<div class="card-body">

				<ul class="bg-white">
					{{-- <li></li> --}}
					<a class="navbar-brand" href="admin/users">Usuarios</a>
					<a class="navbar-brand" href="users/status">Status</a>
					<a class="navbar-brand" href="users/orders">Orders</a>
				</ul>			

			</div>
			@endif

		
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
				<div class="card-body">



					<div class="container bg-white">

						<h1>Tu cuenta está activada</h1>

						<p>Explora el potencial del Foro</p>

						<!-- Main Wrapper -->

						<!--End Top Nav -->

						<!-- -------------------------------------------------- -->
						<div id="root">
							<div class="container pt-5">
								<div class="row align-items-stretch">



									<div class="c-dashboardInfo col-lg-3 col-md-6">
										<a href="/users/califications" style="text-decoration: none;">
											<div class="wrap">
												<h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Calificaciones</h4>Ir<span class="hind-font caption-12 c-dashboardInfo__count">  <i class="bx bx-box"></i></span>
											</div>
										</a>
										</div>		

								

									<div class="c-dashboardInfo col-lg-3 col-md-6">
										<a href="/membership/details" style="text-decoration: none;">
											<div class="wrap">
												<h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Membresias</h4>Ir<span class="hind-font caption-12 c-dashboardInfo__count">  <i class="bx bx-store"></i></span>
											</div>
										</a>
									</div>								

								

									<div class="c-dashboardInfo col-lg-3 col-md-6">
										<a href="/setting/recover" style="text-decoration: none;">
											<div class="wrap">
												<h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Cambiar Contraseña</h4>Ir<span class="hind-font caption-12 c-dashboardInfo__count">  <i class="bx bx-box"></i></span>
											</div>
										</a>
										</div>

									

							

									<div class="c-dashboardInfo col-lg-3 col-md-6">
										<a href="/info" style="text-decoration: none;">
											<div class="wrap">
												<h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Mi Info</h4>Ir<span class="hind-font caption-12 c-dashboardInfo__count">  <i class="bx bx-box"></i></span>
											</div>
										</a>
										</div>								


										

										
										
									</div>
								</div>
							</div>
							<!-- ------------------------------------------------------------- -->
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






