@extends('layouts/app')

@section('meta')

<title>{{ 'Cursos' }}</title> 

<link rel="canonical" href="https://foroworkers.com/cursos" />

<meta name="description" content="Cursos de foroworkers.com, aprender a programar, seo, freelance, ganar dinero online">

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

				<h1 class="display-4">Cursos de ForoWorkers.com</h1>
				<hr>
				<p>Encuentra cursos premium en seo, marketing, digital, como aprender a programar desde cero, 1 vez al mes tendras acceso a 1 curso Gratis, mantente al tanto de las novedades en nuestro canal de Youtube</p>
				<br>


				<div class="row">

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_freelance.png" alt="Curso Freelance">
							

							<div class="card-header">

								<h3>Curso Freelance</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					

								<a class="btn btn-primary" href="https://www.udemy.com/course/como-ser-un-freelance-en-desarrollo-web-y-vivir-de-ello/?couponCode=8B4E35E973320BC1E24D">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_seo.png" alt="Curso de SEO">

							<div class="card-header">				

								<h3>Curso SEO</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/curso-de-seo-y-posicionamiento-en-google-rank-1-organico/?couponCode=8084B5C9CCBEF0A1A196">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_youtube.png" alt="Curso de Youtube">
							<div class="card-header">				

								<h3>Curso Youtuber</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/crea-un-canal-de-youtube-y-crece-de-forma-organica-con-seo/?couponCode=776F6B62A3FE28B6E108">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

				</div> 

				<!-- end row -->

				<br>

				<div class="row">

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_php_desde_cero.png" alt="Curso de Youtube">

							<div class="card-header">

								<h3>Curso PHP y MySQL Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					

								<a class="btn btn-primary" href="https://www.udemy.com/course/php-desde-cero-lamp-stack/?couponCode=53055C2AAD6A4605BF96">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_codeigniter3_desde_cero.png" alt="Curso CodeIgniter 3 Desde Cero">

							<div class="card-header">				

								<h3>Curso CodeIgniter 3 Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/codeigniter-3-de-0-al-limite/?couponCode=0E8CF4D19D86C5AD266F">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_codeigniter4_desde_cero.png" alt="Curso CodeIgniter 4 Desde Cero">

							<div class="card-header">				

								<h3>Curso CodeIgniter 4 Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/codeigniter-4-desarrollando-en-linux/?couponCode=CFFC8E00D749D5B249AE">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

				</div> 

				<!-- end row -->

				<br>

				<div class="row">

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_cakephp5_desde_cero.png" alt="Curso CakePHP 5 Desde Cero">

							<div class="card-header">

								<h3>Curso CakePHP 5 Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					

								<a class="btn btn-primary" href="https://www.udemy.com/course/cakephp-4-una-guia-paso-a-paso/?couponCode=3B56D01CBF114DE10523">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_laravel11_desde_cero.png" alt="Curso Laravel 11 Desde Cero">

							<div class="card-header">				

								<h3>Curso Laravel 11 Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/curso-laravel-10/?couponCode=8F6D8BCBF9F92C15CB79">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_symfony7_desde_cero.png" alt="Curso Symfony 7 Desde Cero">

							<div class="card-header">				

								<h3>Curso Symfony 7 Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/curso-symfony-7-desde-cero/?couponCode=2BFAE1A068A2FAFF9DCA">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

				</div> 

				<!-- end row -->
				
				<br>
					<div class="row">

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_postgresql_desde_cero.png" alt="Curso PostgreSQL Desde Cero">

							<div class="card-header">

								<h3>Curso PostgreSQL Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					

								<a class="btn btn-primary" href="https://www.udemy.com/course/aprende-postgresql-practicando-paso-a-paso/?couponCode=BBAB349DDD3C0F543D6B">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_basededatos_desde_cero.png" alt="Curso Base de Datos Desde Cero">

							<div class="card-header">				

								<h3>Curso Diseño de Base de Datos</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/postgresql-diseno-y-consultas-enfocado-a-la-web/?couponCode=49DCF42CC3FF264A0534">
								    	<span class="fas fa-arrow-right"></span>	
								Empezar Hoy</a>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="{{URL('public/images/cursos')}}/curso_ajedrez_desde_cero.png" alt="Curso Ajedrez Desde Cero">

							<div class="card-header">				

								<h3>Curso de Ajedrez Desde Cero</h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Clases en Video</h4>					


								<a class="btn btn-primary" href="https://www.udemy.com/course/ajedrez-desde-cero-para-programadores/?couponCode=320E1CA2644E885751AA">
									<span class="fas fa-arrow-right"></span>		
								Empezar Hoy</a>

							</div>

						</div>

					</div>

				</div> 

				<!-- end row -->




			</div>
		</div>

	</div>
	

</div> {{-- end row --}}


@endsection 



