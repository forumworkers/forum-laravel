@extends('layouts/app')
@section('title','SubCategory')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>

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
					Visitaste el Foro en: 
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

				{{-- 	<p>Explora el potencial del Foro</p>

					<h1>Adquiere un plan de Membresia Premiun</h1> --}}
					<br>

					<h2 class="bg-info text-white">Usuarios</h2>

					<div class="row">

						{{-- <h1>Adquiere un plan de Membresia Premiun</h1>

							<br> --}}

							{{-- 	<h2 class="bg-info text-white">Metodo 1 Pago con Paypal</h2> --}}

							<div class="card-body">

								{{-- <h1 class="bg-info text-white">Membresias y precios</h1> --}}
								<br>

								<div class="container">

										{{-- <a href="users/new" class="btn btn-light">Agregar</a> --}}

			<table class="table table-responsive table-bordered table-striped" id="myTable">				
				<thead>
					<tr>
						<th>Username</th>
				{{-- 		<th>Last Name</th> --}}
						<th>Email</th>
						<th>Email Verified</th>
						<th>Is Buyer</th>
						<th>Is Verified</th>
						<th>Is Banned</th>
						<th>Reason</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

					@foreach($users as $user)
						

						<tr>
							<td>{{ $user->username }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->statu_id }}</td>
							<td>{{ $user->is_buyer }}</td>
							<td>{{ $user->is_verified }}</td>
							<td>{{ $user->is_banned }}</td>
							<td>{{ $user->reason_id }}</td>
							
							<td>
								
								<a href="statu/change/{{ $user->userid }}" class="btn btn-warning btn-sm">Verified Status</a>
								<a href="statu/ban/{{ $user->userid }}" class="btn btn-danger btn-sm">Banear</a>
									<a href="statu/desban/{{ $user->userid }}" class="btn btn-success btn-sm">Quitar Ban</a>
								<a href="users/{{ $user->userid }}" class="btn btn-danger btn-sm">Reason</a>
								{{-- <a href="users//edit" class="btn btn-info btn-sm">Edit</a> --}}
							{{-- 	<?php echo form_open('users/'.$user->user_id); ?> --}}

								
{{-- 
								<input type="hidden" name="_method" value="DELETE">

								<button href="users" class="btn btn-danger btn-sm">Delete</button> --}}

								{{-- <?php echo form_close(); ?> --}}
							</td>
						</tr>

							@endforeach	

				</tbody>
			</table>

								</div>

								

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

			

					{{-- end container --}}

				</div>


				@endif


			</div>







		</div>
	</div>




	@endsection 






