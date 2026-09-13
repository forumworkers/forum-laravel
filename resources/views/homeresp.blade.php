@extends('layouts/app')
@section('title','Home')
@section('content')
@include('inc/navbar')


@if(Auth::user() == null)
<div class="row">

	<div class="container">

		<div class="col-10 offset-2 bg-white">

			<h1>Registrate y Comienza a Ganar Dinero</h1>
			<ul>
				<li>Gana dinero por participar</li>
				<li>Gana dinero por recomendarnos</li>
				<li>Descubre ofertas de empleo diariamente</li>
				<li>Negocios seguros</li>
				<li>¡Información premium y más!</li>
			</ul>

			{{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IZ4tN4Q5vVs?si=rLivfEHVaPbcoG9w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}

				<a href="/register" class="btn btn-warning">Registro</a>

				<a href="/login" class="btn btn-warning">Acceder</a>

		</div>
		
	</div>

</div>
@endif



{{-- <h2 class="bg-primary">Sección de negocios</h2> --}}

<div class="row">

	{{-- <h2 class="bg-primary">Sección de negocios</h2> --}}

	{{-- <h3 class="text-success">Propiedades Digitales</h3> --}}

	{{-- @foreach($categorys as $category) --}}

	<div class="container">

		<h2 class="bg-primary">Sección de negocios</h2>

		<div class="col-10 offset-2 bg-white">

			<h3 class="text-success">Propiedades Digitales</h3>
			{{-- <p>{{ $category->maincategory_name }}</p> --}}
			{{-- <ul>
			<li><a href="/forum/{{ $category->maincategory_name  }}" class="btn btn-success">{{ $category->maincategory_name }}</a></li>
			<li></li>
		</ul> --}}

		<table class="table table-responsive table-bordered table-striped" id="myTable">				
			<thead>
				<tr>
							{{-- <th>Me Ofrezco</th>
							<th>Repuestas</th>
							<th>Visitas</th> --}}
						{{-- <th>Created_at</th>
						<th>Updated_at</th>
						<th>Deleted_at</th> --}}
						{{-- <th>Actions</th> --}}
					</tr>
				</thead>
				<tbody>

					{{-- da error end file si se deja espacio en foreach --}}
					@foreach($categorys as $category)


					<tr>
						{{-- <td>{{ $category->maincategory_name }}</td> --}}
						{{-- <td>Repuestas</td>
							<td>Visitas</td> --}}
							{{-- <td></td>
							<td></td>
							<td></td> --}}
							{{-- <td> --}}
								{{-- <a href="/members/{{ $category->username }}/{{ $category->userid }}" class="btn btn-success btn-sm">{{ $category->username }}</a> --}}
								<a href="/forum/{{ $category->maincategory_url  }}" class="">{{ $category->maincategory_name }}</a>
								
							{{-- </td> --}}
							@endforeach

							{{-- <td> --}}

								<div>
									{{ $categoryslast->maincategory_name }}
									<a href="/tema/{{ $categoryslast->url_name }}" class="">{{ $categoryslast->post_name }}</a>
									<a href="/members/{{ $categoryslast->username }}/{{ $categoryslast->id }}" class="">{{ $categoryslast->username }}</a>
								</div>

							{{-- </td>
								--}}

							</tr>					

							{{-- @endforeach --}}

						</tbody>
					</table>

				</div>

{{-- <div class="col-2">
<p>Ultimo servicio</p>
</div> --}}

{{-- </div> --}}
{{-- @endforeach --}}

{{-- @foreach ($categoryslast as $category) --}}

{{-- <div class="bg-white"> --}}

	{{-- <div class="col-2">
		<ul>
			<li>{{ $categoryslast->maincategory_name }}</li>
			<li><a href="/tema/{{ $categoryslast->url_name }}" class="btn btn-success">{{ $categoryslast->post_name }}</a></li>			
			<li><a href="/members/{{ $categoryslast->username }}/{{ $categoryslast->id }}" class="btn btn-success">{{ $categoryslast->username }}</a></li>

			
		</ul>
		
	</div> --}}

{{-- <div class="col-2">
<p>Ultimo servicio</p>
</div> --}}

</div> {{-- end container --}}
{{-- @endforeach --}}

</div> {{-- end row --}}

<hr>

<div class="row">

	{{-- <h3 class="text-success">Servicios</h3> --}}

	{{-- @foreach ($categorys1 as $category) --}}

	<div class="container">

		<div class="col-10 offset-2 bg-white">

			<h3 class="text-success">Servicios</h3>

			{{-- <p>{{ $category->maincategory_name }}</p> --}}
		{{-- <li><a href="/maincategory/{{ $category->id }}" class="btn btn-primary">{{ $category->maincategory_name }}</a></li>
		<li></li> --}}

		<table class="table table-responsive table-bordered table-striped" id="myTable">				
			<thead>
				<tr>
							{{-- <th>Me Ofrezco</th>
							<th>Repuestas</th>
							<th>Visitas</th> --}}
						{{-- <th>Created_at</th>
						<th>Updated_at</th>
						<th>Deleted_at</th> --}}
						{{-- <th>Actions</th> --}}
					</tr>
				</thead>
				<tbody>

					{{-- da error end file si se deja espacio en foreach --}}
					@foreach($categorys1 as $category)


					<tr>
						{{-- {{ $category->maincategory_name }} --}}
						{{-- <td>Repuestas</td>
							<td>Visitas</td> --}}
							{{-- <td></td>
							<td></td>
							<td></td> --}}
							{{-- <td> --}}
								{{-- <a href="/maincategory/{{ $category->id }}" class="">{{ $category->maincategory_name }}</a> --}}

								<a href="/forum/{{ $category->maincategory_url }}" class="">{{ $category->maincategory_name }}</a>

								

								@endforeach

								{{-- <td> --}}

									<div>
										{{ $categoryslast->maincategory_name }}
										<a href="/tema/{{ $categoryslast->url_name }}" class="">{{ $categoryslast->post_name }}</a>
										<a href="/members/{{ $categoryslast->username }}/{{ $categoryslast->id }}" class="">{{ $categoryslast->username }}</a>
									</div>

								{{-- </td> --}}
							</tr>					

							{{-- @endforeach --}}

						</tbody>
					</table>

				</div>

			{{-- <div class="col-2">
				<p>Ultimo servicio</p>
			</div> --}}

		</div>

		{{-- @endforeach --}}
		<hr>

	</div> {{-- end row --}}
	<hr>


	@endsection 



{{-- @endforeach

</div>

<div class="row">

<h3>Servicios</h3>

@foreach ($categorys1 as $category)

<div class="col-12">
<p>{{ $category->maincategory_name }}</p>
</div>

@endforeach

</div>

@endsection --}}


