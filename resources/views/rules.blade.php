@extends('layouts/app')
@section('meta')

<title>{{ 'Reglas' }}</title> 

<link rel="canonical" href="https://foroworkers.com/reglas" />

<meta name="description" content="Reglas de foroworkers.com, moderacion de los admin y moderadores">

@endsection 
@section('title','Home')
@section('content')
@include('inc/navbar')

<style type="text/css">
	
	p{
		font-size: 18px;	
	}

</style>

<div class="row">

	<div class="container">

		<div class="card">

			<div class="card-body">

				<h1 class="display-4">Reglas de ForoWorkers.com</h1>
				<hr>
				<br>
				<p>ForoWorkers tiene un conjunto de reglas al igual que otros sitios web, asi que al <b>registrarse y aceptar los terminos</b>, estas reglas se deben cumplir sin excepcion</p>
				<br>
				<p>1) <b>Prohibido la compra y venta de calificaciones y reseñas en este sitio web o cualquier otro</b>, ya que el historial de comercio debe ser limpio y transparente con negocios reales</p>
				<br>
				<p>2) <b>Prohibido agregar informacion de contacto externa en el cuerpo de un post</b>, esta informacion la puede compartir por privado, pero no tendra validez a la hora de solicitar la remocion de una calificacion negativa</p>
				<br>
				<p>3) Prohibido agregar imagenes de perfil o en un post que no sean de caracter profesional, igualmente duplicar imagenes de otros usuarios</p>
				<br>
				<p>4) Utilizar una escritura adecuada, aunque tenga disputas con otro usuario utilice palabras adecuadas</p>
				<br>
				<p>5) Prohibido alegar faltas en los negocios sin tener las pruebas pertinentes</p>
				<br>
				<p>6) Ningun Admin o Moderador le pedira dinero o informacion sensible</p>
				<br>
				<p>7) Al empezar un negocio con otro usuario, asume el riesgo ForoWokers.com no se hace responsable, solo podemos alertar a los demas usuarios de no hacer negocios con ese usuario, mediante el sistema de calificaciones y reseñas</p>
				<br>
				<p>8) No se realizan reembolsos por la compra de las membresias</p>
				<br>
				<p>9) <b>Prohibido agregar links de afiliados en el cuerpo de un post</b>, promocione su producto de forma privada por mensajeria</p>
				<br>
				<hr>
				<h2>Registro</h2>
				<p>1) Crearse una cuenta y validar el email</p>
				<br>
				<p>2) Indicar su username y email de foroworkers, junto con la url de verificación en alguna otra plataforma donde tenga experiencia como freelance o cliente, <b>algunas url admitidas son fiverr, upwork, workana, udemy</b>, si desea aplicar con otra url indicar el nombre de la plataforma donde tiene un perfil, enviar los 3 requisitos via <a href="https://www.linkedin.com/in/jonathan-castro-expert-php-developer/" target="_blank">linkedin</a> al moderador</p>
				<br>
				<p>3) Validar por videoconferencia de 5 min el perfil asociado a la url</p>
				<br>
				<p>4) Aprobación completa de la cuenta en el transcurso de 1 o 2 dias habiles</p>
			

				<hr>
				<h2>Baneos</h2>
				<br>
				<p>1) En este sitio web no se usan bots ni AI, la moderacion es con personas reales, al reportar o empezar una disputa presentar las pruebas pertinentes en privado con el moderador, no es necesario que esta informacion sea publica</p>
				<br>
				<p>2) Las calificaciones tanto positivas y negativas se pueden remover, siempre y cuando presente el caso con las pruebas pertinentes</p>
				<br>
				<p>3) Si las pautas iniciales del negocio se hacen por fuera del foro por ejemplo (email, telegram, WhatsApp, discord, slack, skype, etc), no tendra validez solicitar la calificacion negativa o baneo del usuario</p>
				<br>
				<p>4) Solicitar reembolsos de la membresia</p>
				<br>
				<p>5) Hacerse pasar por un Admin o Moderador</p>
				<br>
				<p>6) <b>Acumular 10 calificaciones negativas</b> en el historial</p>

			</div>
		</div>

	</div>
	

</div> {{-- end row --}}


@endsection 




