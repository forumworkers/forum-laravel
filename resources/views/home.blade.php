@extends('layouts/app')
@section('meta')

{{-- <title>{{ 'ForoWorkers' }}</title>  --}}

<title>Foro de SEO, WebMasters en Español</title>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "image": [        
        "https://foroworkers.com/public/images/foroworkers.png"
       ],
      "name": "Foroworkers",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Caracas",
        "addressLocality": "Distrito Federal",
        "addressRegion": "VE",
        "postalCode": "1010",
        "addressCountry": "VE"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": 5,
          "bestRating": 5
        },
        "author": {
          "@type": "Person",
          "name": "Jonathan Castro"
        }
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 10.48801,
        "longitude": -66.87919
      },
      "url": "https://foroworkers.com/",
      "telephone": "+5804241666224",     
      "priceRange": "$$$",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday"
          ],
          "opens": "11:30",
          "closes": "22:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Wednesday",
            "Thursday",
            "Friday"
          ],
          "opens": "11:30",
          "closes": "23:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "16:00",
          "closes": "23:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "16:00",
          "closes": "22:00"
        }
      ]      
    }
    </script> 

<link rel="canonical" href="https://foroworkers.com/" />

<meta name="description" content="Foro de SEO en Español, Webmasters, Negocios, Emprendedores, Compra y Venta de Servicios Online, Ofertas, Promociones en foroworkers.com">

{{-- <meta property="og:type" content="article" /> --}}
{{-- <meta property="og:title" content="{{ 'ForoWorkers' }}" /> --}}
<meta property="og:title" content="Foro de SEO, WebMasters en Español" />
<meta property="og:description" content="Foro de SEO en Español, Webmasters, Negocios, Emprendedores, Compra y Venta de Servicios Online, Ofertas, Promociones en foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/" />

<meta property="og:image" content="https://foroworkers.com/public/images/foroworkers.png" /> 

<meta name="author" content="Jonathan Castro">
<meta name="copyright" content="foroworkers.com" /> 

<meta name='robots' content='noindex,follow' />

@endsection 
{{-- @section('title','Home') --}}
@section('content')

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
@if(!Auth::user())   
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}

{{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/> --}}
@endif

<style type="text/css">
	

	.custom-info {
		padding: 4px;
		/*padding-top:0px;*/
			/*padding-bottom:  30px;
			padding-left: 30px;*/
		}


		
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>
	
	@include('inc/navbar')






	@if(Auth::user() == null)

	{{-- <div class="container"> --}}
		<div class="row bg-white">



			<div class="col-4 offset-1">
				{{-- <p>uno</p> --}}
				<h1 class="h1">Foro de SEO, WebMasters en Español</h1>
				<hr>
				<ul>
					<li><b>Foro de Negocios</b></li>
					<li>Compra y Venta de Servicios Online</li>
					<li>Gana dinero como Freelance con tu Talento</li>
					<li>Descubre ofertas de trabajos diariamente o mensualmente</li>
					<li>Negocios Seguros, siguiendo las recomendaciones</li>
					<li>Recursos Premium y Gratis</li>
				</ul>

			</div>

			<div class="col-4 offset-1">
				{{-- <p>dos</p> --}}
				<iframe width="560" height="315" src="https://www.youtube.com/embed/xiPdMhsBWxg?si=72LtOrzwCS029ryy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

				<a href="/register" class="btn btn-warning">Empieza Hoy</a>

		{{-- <div class="col-3">
			<a href="/register" class="btn btn-warning">Registro</a>
		</div>
		<div class="col-3">
			<a href="/login" class="btn btn-warning">Acceder</a>
		</div> --}}
		<br>
	</div>
</div>
{{-- </div> --}}


@endif
<br>
@if(Auth::user() == null)

{{-- <div class="container"> --}}
	<div class="row bg-white">



		<div class="col-10 offset-1">
			{{-- <p>uno</p> --}}
			<h2 class="h2">Punto de encuentro para Negocios Online</h2>
			<hr>
			<p>Usuarios y <a href="https://agenciaseocastro.com/" target="_blank">Agencias SEO
					</a>de todo el mundo estan comprando y vendiendo servicios con su talento digital, unete a la red de profesionales creando nuevas oportunidades de negocios</p>
			{{-- <hr> --}}
			<div class="col-8 offset-2">  
				<div id="mapi" style="width: 100%;height: 380px;box-shadow: 5px 5px 5px #888;"></div>

				
			</div>
			<br>

			
			<br>
		</div>


	</div>

	<div class="row bg-white">



		<div class="col-4 offset-4">

			<img src="{{URL('public/images')}}/foro_de_webmasters.png" alt="Foro de SEO, WebMasters en Español" class="img-fluid">
			

				<a href="/register" class="btn btn-warning">Empieza Hoy</a>
				
		</div>

	</div>
{{-- </div> --}}

	{{-- <div class="container-fluid image"> --}}
@endif

<br>

{{-- @if(!Auth::user())

<div class="row">
	<div class="offset-2">
		<a  href="https://lampforo.com/plans" target="_blank">
		<img src="{{URL('images')}}/lampforo_banner.png" alt="LampForo Banner">
	</a>
	</div>
</div>
<br>
<br>   

@endif --}}


{{-- <div class="row">
	<div class="offset-2">
		<a  href="https://es.fiverr.com/s/rVWNey" target="_blank">
		<img src="{{URL('images')}}/servicio_programador_fiverr.png" alt="Servicio Programador Fiverr">
	</a>
	</div>
</div> --}}
<div class="row offset-2">
	<div class="">
		{{-- <form> --}}
			<form method="POST" action="" id="logForm">
     

		<div class="input-group">
            <input type="text" id="findPost" class="form-control" placeholder="Buscar Tema">
            <div class="input-group-append">
              <button class="btn btn-danger" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>

	</div>
</div>





<div class="container">

	<div class="temporal">	

	</div>

	<div id="msg_info"></div>

	@if(!empty($category))

	<div class="subforum">
		<div class="subforum-title">
			{{-- <h1>Sección de negocios</h1> --}}
			<h2 class="">Últimos temas Negocios, Servicios, Comunidad</h2>

			
		</div>

		{{-- {{$tablelast1 = array_merge((array)$categorylastnegocios,(array)$categorylastservicios)}} --}}

		{{-- @foreach( $tablelast  as $category) --}}
		@foreach( $tablelast  as $category)
		{{-- <div>{{$category}}</div> --}}
		{{-- 	<div>{!! $category !!}</div> --}}
		{{-- 	<div>{{$category[2]}}</div> --}}
		{{-- 	<div>{!! $category[0]->post_name !!}</div> --}}
		{{-- {{ dd($tablelast) }} --}}
		{{-- {{ dd($category[0]->post_name) }} --}}
		

		<div class="subforum-row">
			{{-- @foreach($categorys as $category) --}}
			{{-- <div class="subforum-icon subforum-column">
				<span class="{{$category->type_color}} text-white custom-info">{{$category->type_name}}</span>
			<a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>	
		</div> --}}

		<div class="subforum-icon subforum-column">
			{{-- {{ $data = array('negocios','servicios','comunidad'); }} --}}
			
			{{-- 	<div>{!! (array)$data !!}</div>	 --}}
			{{-- <div>Tema</div> --}}
			<i class="fa-solid fa-fire"></i>
		</div>

		<div class="subforum-description subforum-column-one">
			{{-- <span class="{{$category[0]->type_color}} text-white custom-info">{{$category[0]->type_name}}</span> --}}
			@if($category[0]->type_color)
			<span class="{{$category[0]->type_color}} text-white custom-info">{{$category[0]->type_name}}</span>  
			<a href="/temas/{{$category[0]->url_name}}/{{$category[0]->id}}/{{$category[0]->postid}}">{{ $category[0]->post_name }}</a>	
			@endif
		{{-- 	@if($category[0]->type_color == null) --}}
		@if($category[0]->content_color)
			{{-- <span class="bg-danger text-white custom-info">Comunidad</span> --}}
			<span class="{{$category[0]->content_color}} text-white custom-info">{{$category[0]->content_name}}</span>  
			<a href="/comunidad/{{$category[0]->url_name}}/{{$category[0]->id}}/{{$category[0]->postid}}">{{ $category[0]->post_name }}</a>	
			@endif
		</div>

		<div class="subforum-description subforum-column-two">
			{{-- <span class="{{$category[1]->type_color}} text-white custom-info">{{$category[1]->type_name}}</span> --}}
			@if($category[1]->type_color)
			<span class="{{$category[1]->type_color}} text-white custom-info">{{$category[1]->type_name}}</span>  
			<a href="/temas/{{$category[1]->url_name}}/{{$category[1]->id}}/{{$category[1]->postid}}">{{ $category[1]->post_name }}</a>
			@endif

			@if($category[1]->content_color)
			{{-- <span class="bg-danger text-white custom-info">Comunidad</span> --}}
			<span class="{{$category[1]->content_color}} text-white custom-info">{{$category[1]->content_name}}</span>    
			<a href="/comunidad/{{$category[1]->url_name}}/{{$category[1]->id}}/{{$category[1]->postid}}">{{ $category[1]->post_name }}</a>
			@endif	
		</div>


		<div class="subforum-description subforum-column-three">
			{{-- <span class="{{$category[2]->type_color}} text-white custom-info">{{$category[2]->type_name}}</span> --}}
			@if($category[2]->type_color)
			<span class="{{$category[2]->type_color}} text-white custom-info">{{$category[2]->type_name}}</span>  
			<a href="/temas/{{$category[2]->url_name}}/{{$category[2]->id}}/{{$category[2]->postid}}">{{ $category[2]->post_name }}</a>
			@endif

			@if($category[2]->content_color)
			{{-- <span class="bg-danger text-white custom-info">Comunidad</span> --}}
				<span class="{{$category[2]->content_color}} text-white custom-info">{{$category[2]->content_name}}</span>      
			<a href="/comunidad/{{$category[2]->url_name}}/{{$category[2]->id}}/{{$category[2]->postid}}">{{ $category[2]->post_name }}</a>
			@endif	
		</div>




			{{-- <div class="subforum-description subforum-column">
				<span class="{{$category->type_color}} text-white custom-info">{{$category->type_name}}</span>
			<a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>	
		</div> --}}


	</div>

		{{-- <div class="subforum-description subforum-column-mini col-6">
			<span class="{{$category->type_color}} text-white custom-info">{{$category->type_name}}</span>
			<a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>	

		</div> --}}







		@endforeach

		{{-- @foreach($categorylastnegocios as $category)

		<div class="subforum-description subforum-column-mini col-6">
			<span class="bg-info">{{$category->type_name}}</span>
			<a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>	

		</div>





		@endforeach --}}

	</div>

	@endif
	<!--More-->

	{{-- <div class="subforum">
		<div class="subforum-title">
		
			<h1 class="text-light">Propiedades digitales Actualizado</h1>

			
		</div>

		@foreach($categorylastnegocios as $category)

		<div class="subforum-description subforum-column-mini col-6">
			<span class="{{$category->type_color}} text-white custom-info">{{$category->type_name}}</span>
			<a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>	

		</div>





		@endforeach


	</div> --}}
	<!--More-->

{{-- 	<div class="subforum">
		<div class="subforum-title">
			
			<h1 class="text-light">Servicios Actualizado</h1>

			
		</div>

		@foreach($categorylastservicios as $category)

		<div class="subforum-description subforum-column-mini col-6">
			<span class="{{$category->type_color}} text-white custom-info">{{$category->type_name}}</span>
			<a href="/temas/{{$category->url_name}}/{{$category->id}}/{{$category->postid}}">{{ $category->post_name }}</a>	

		</div>





		@endforeach
		

	</div> --}}
	<!--More-->

	{{-- guia --}}
	


	<div class="subforum" style="margin-bottom: 250px;">
		<div class="subforum-title">
			{{-- <h1>Sección de negocios</h1> --}}
			<h2 class="">Propiedades digitales</h2>

			@if(!empty($categoryslast))



			{{-- <div class="subforum-info subforum-column"> --}}
				{{-- 	<b><a href="">Last post</a></b> by <a href="">JustAUser</a> --}}
				<b></b><b>Last post</b> <a class="" href="/temas/{{ $categoryslast->url_name }}/{{$categoryslast->maincategory_id}}/{{$categoryslast->postid}}"> {{ $categoryslast->post_name }}</a></b><b> by User</b>  <a class="" href="/members/{{ $categoryslast->username }}/{{ $categoryslast->id }}"> {{ $categoryslast->username }}</a>			

				{{-- <br>on <small class="text-light">{{ $categoryslast->updated_at }}</small> --}}
				<br><p class=""><b>on</b>  {{ date('d-m-Y',strtotime($categoryslast->updated_at)) }}</p>

				@endif

			{{-- </div> --}}
		</div>

	@foreach($categorys as $category)
		

		<div class="ubforum-row">
			
			<div class="ubforum-description subforum-column" style="float:left">
				
				<h4><i class="{{ $category->maincategory_icon }}"></i><a href="/forum/{{ $category->maincategory_url  }}" class="">{{ $category->maincategory_name }}</a></h4>
				
			</div>
		

		</div>

		@endforeach

		{{-- <div class="pagination">

			{!! $categorys->links() !!}
		</div> --}}

	</div>
	<!--More-->

	

	<div class="subforum" style="margin-bottom: 450px;">
		<div class="subforum-title">
			{{-- <h1>Sección de negocios</h1> --}}
			<h2 class="">Servicios</h2>

				@if(!empty($categoryslastser))
			{{-- <div class="subforum-info subforum-column"> --}}
				{{-- 	<b><a href="">Last post</a></b> by <a href="">JustAUser</a> --}}
				<b><b>Last post</b><a class="" href="/temas/{{ $categoryslastser->url_name }}/{{$categoryslastser->maincategory_id}}/{{$categoryslastser->postid}}"> {{ $categoryslastser->post_name }}</a></b><b> By User</b> <a class="" href="/members/{{ $categoryslastser->username }}/{{ $categoryslastser->id }}"> {{ $categoryslastser->username }}</a>			

				{{-- <br>on <small class="text-light">{{ $categoryslast->updated_at }}</small> --}}
				<br><p class=""><b>on</b> {{ date('d-m-Y',strtotime($categoryslastser->updated_at)) }}</p>

				@endif

			{{-- </div> --}}
		</div>

		@foreach($categorys1 as $category)

		<div class="ubforum-row">
			
			<div class="ubforum-description subforum-column" style="float:left">
				
				
				<h4><i class="{{ $category->maincategory_icon }}"></i><a href="/forum/{{ $category->maincategory_url  }}" class="">{{ $category->maincategory_name }}</a></h4>
				
			</div>
		

		</div>
		

			@endforeach

			{{-- <div class="pagination">
				
				{!! $categorys1->links() !!}
			</div> --}}

		</div>
		<!--More-->

		<div class="subforum" style="margin-bottom: 250px;">
			<div class="subforum-title">
				{{-- <h1>Sección de negocios</h1> --}}
				<h2 class="">Comunidad</h2>

				@if(!empty($categoryslastcom))


				{{-- <div class="subforum-info subforum-column"> --}}
					{{-- 	<b><a href="">Last post</a></b> by <a href="">JustAUser</a> --}}
					{{-- <b><a class="" href="/comunidad/{{ $categoryslastcom->url_name }}/{{$categoryslastcom->maincategory_id}}/{{$categoryslastcom->postid}}">Last post {{ $categoryslastcom->post_name }}</a></b> <a class="" href="/members/{{ $categoryslastcom->username }}/{{ $categoryslastcom->id }}">by User {{ $categoryslastcom->username }}</a> --}}

					<b><a class="" href="/{{ $categoryslastcom->subcategory_url }}/{{ $categoryslastcom->maincategory_url }}/tema/{{ $categoryslastcom->url_name }}.{{$categoryslastcom->maincategory_id}}{{$categoryslastcom->postid}}">Last post {{ $categoryslastcom->post_name }}</a></b> <a class="" href="/members/{{ $categoryslastcom->username }}/{{ $categoryslastcom->id }}">by User {{ $categoryslastcom->username }}</a>

					@endif				

					{{-- <br>on <small class="text-light">{{ $categoryslast->updated_at }}</small> --}}
					{{-- <br><p class="text-light">on {{ date('d-m-Y',strtotime($categoryslastcom->updated_at)) }}</p> --}}

				{{-- </div> --}}
			</div>

			@foreach($categorys2 as $category)

			<div class="ubforum-row">
			
			<div class="ubforum-description subforum-column" style="float:left">
				
				
				
				<h4><i class="{{ $category->maincategory_icon }}"></i><a href="/comunidad/{{ $category->maincategory_url  }}" class="">{{ $category->maincategory_name }}</a></h4>
				
			</div>
		

		</div>
		

			@endforeach

			{{-- <div class="pagination">
				
				{!! $categorys2->links() !!}
			</div> --}}

		</div>
		<!--More-->





		<!---->
	</div>





	@include('inc/footer')


	@if(!Auth::user())   

	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>

	{{-- <script src="{{URL('js')}}/map.js"></script>
	<script src="{{URL('public/js')}}/map.min.js"></script> --}}

	<script type="text/javascript">

		var marker;

		var markes;

		var map = L.map('mapid');


		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {  
  maxZoom: 18
}).addTo(map);

		L.control.scale().addTo(map);



		$.ajax({			
			url: BASE_URL +'/api/users/map',     
			dataType: 'json'    
		})
		.done(function(result) {

 

  for (let i = 0; i < result.length; i++) {  



  	view = map.setView([result[i].latitude,result[i].longitude],2);

  	marker =  L.marker([result[i].latitude,result[i].longitude]).addTo(map);

  	marker.bindPopup(result[i].country_name).addTo(map);  

  }


});




</script>

@endif

<script type="text/javascript">


$("#logForm").submit(function(event) {
  event.preventDefault();

  let post = $("#findPost").val();
  // let password = $("#password").val();

  // let csrfHash = $('#tokenN').val();

  // let formData = $('#logForm').serialize();

 

  $.post(BASE_URL + '/api/find/post',
  {       
    post: post
    // password: password
    // csrf_test_name:csrfHash   
  }, function(result) {  


    // console.log(result['findpost']);

    // console.log(result['findpostfree']);

    $(".subforum").hide();

    $(".posts-table").empty();

    // location.reload();

    // $.each(result, function(index, val) {
    $.each(result['findpost'], function(index, val) {

let datc = new Date(val.created_at);

// console.log((datc.getDate());

let datu = new Date(val.updated_at);

    	// console.log((dat.getTime());

    	// $(".posts-table").empty();

   $(".temporal").append(
   	`<div class="posts-table">			
				<div class="table-row">					
					<div class="status"><a href="/members/${val.username}/${val.userid}"><img src="https://foroworkers.com/public/storage/uploads/${val.img}" class="img-thumbnail" alt="Cinque Terre"></a></div>
					<div class="subjects">
						<span class="${val.type_color} text-white custom-info">${val.type_name}</span>
						<a href="/temas/${val.url_name}/${val.id}/${val.postid}">${val.post_name}</a>
						<br>
						<span>Started by <b><a href="/members/${val.username}/${val.userid}">${val.username}</a></b> .</span>	
						<br><span class="">on ${datc}</span>
					</div>
					<div class="replies">
					${val.views}
						<br> views
					</div>
					<div class="last-reply">
					${datu}						
						<br>Last Reply						
					</div>
				</div>				
			</div>
   	`)
   
 });

    $.each(result['findpostfree'], function(index, val) {

    	let datc = new Date(val.created_at);

        let datu = new Date(val.updated_at);

    	// $(".posts-table").empty();

   $(".temporal").append(
   	`<div class="posts-table">			
				<div class="table-row">					
					<div class="status"><a href="/members/${val.username}/${val.userid}"><img src="https://foroworkers.com/public/storage/uploads/${val.img}" class="img-thumbnail" alt="Cinque Terre"></a></div>
					<div class="subjects">
						<span class="bg-danger text-white custom-info">Comunidad</span>
						<a href="/comunidad/${val.url_name}/${val.id}/${val.postid}">${val.post_name}</a>
						<br>
						<span>Started by <b><a href="/members/${val.username}/${val.userid}">${val.username}</a></b> .</span>	
						<br><span class="">on ${datc}</span>
					</div>
					<div class="replies">
					${val.views}
						<br> views
					</div>
					<div class="last-reply">
					${datu}						
						<br>Last Reply						
					</div>
				</div>				
			</div>
   	`)
   
 });


    if (result['findpost'] == '') {

      // $("#msg_info").html('No se encontraton resultados');

      $("#msg_info").html('<p class="alert alert-danger text-dark">No se encontraton resultados en negocios</p>');

    }

     if (result['findpostfree'] == '') {

     // $("#msg_info").html('No se encontraton resultados');

      $("#msg_info").html('<p class="alert alert-info text-dark">No se encontraton resultados en comunidad</p>');

    }



    // $(".posts-table").empty();

   

    // $("#msg_errors").html(data);

    // if (data.access == 1) {

    //   window.location = '/dashboard';

    // }

    //  if (data.access == 2) {

    //   window.location = '/panel';

    // }

    // if (data.access == 3) {

    //   $("#msg_errors").html('<p>Credentials do not match</p>');

    // }      

  })
  .fail(function(data, textStatus, xhr) {
    

    $("#msg_errors").html('<p>Request failed, Error Status'+ data.status +'</p>');

  });




});

	

</script>

@endsection 




