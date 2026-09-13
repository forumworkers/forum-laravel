@extends('layouts/app')

@section('meta')

{{-- <title>{{ $post->type_name.' - '.$post->post_name }} {{ $urluserid }}/{{ $urlpostid }}</title> --}}

{{-- <title>{{ $post->post_name }} {{ $urluserid }}/{{ $urlpostid.' - '.$post->type_name }}</title> --}}

<title>{{ $post->post_name }} {{ $urluserid }}/{{ $urlpostid }}</title>    


<link rel="canonical" href="https://foroworkers.com/temas/{{$post->url_name}}/{{ $urluserid }}/{{ $urlpostid }}" />


<meta name="description" content="Servicio de {{$post->type_name}} , encuentra un freelance en {{$post->post_name}} {{ $urluserid }}/{{ $urlpostid }} con foroworkers.com">

<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $post->type_name.' - '.$post->post_name }} {{ $urluserid }}/{{ $urlpostid }}" />
<meta property="og:description" content="Servicio de {{$post->type_name}} , encuentra un freelance en {{$post->post_name}} {{ $urluserid }}/{{ $urlpostid }} con foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/temas/{{$post->url_name}}/{{ $urluserid }}/{{ $urlpostid }}" /> 

@endsection 
{{-- @section('title','SubCategory') --}}
@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}

<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.ck.ck-editor__editable_inline>:last-child {
			margin-bottom: 250px;
		}

		.forms-info {
			font-size: 30px;
		}

		.covert {
			padding-top:30px;
			padding-bottom:  30px;
			padding-left: 30px;
		}

		a:link { 
			text-decoration: none;			
		} 

		.covert-author {
			padding-top:30px;
			/*padding-bottom:  30px;*/
			padding-left: 30px;
		}

		.covert-calification {
			/*padding-top:0px;*/
			padding-bottom:  30px;
			padding-left: 30px;
		}

		.custom-img {
			/*height: auto;
			width: auto;*/
			max-width: 300px;
			height: 100px;
			border: 2px solid black;
			border-radius: 5px;
			/*padding-left: 30px;*/
		}

        /*para resenas*/
        label{color:grey;font-size:4.0em}
        /*escondemos los botones de radio*/
        input[type="radio"]{display :none;}

        .calificacion{
            direction:rtl;
            unicode-bidi:bidi-override;
            text-align: center;
        }

        /*label:hover{color:orange}
        label:hover ~ label{color:orange;}

        input[type = "radio"]:checked ~ label{color:orange}*/


        
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>

	@include('inc/navbar')





	<div class="">

		<div class="container">





			<div class="container">
				<!--Navigation-->
				<div class="navigate">
					{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a> >> <a href="">random topic</a></span> --}}
					{{-- <span><a href="">{{ 'Propiedades Digitales' }}</a> >> <a href="">{{ $post->maincategory_name }}</a></span> --}}

					<!--Navigation-->




					@if(!empty($post))

					@if($post->subcategory_id == 1)
					{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span> --}}
					{{-- <span><a href="">{{ 'Propiedades Digitales' }}</a> >> <a href="">{{ $post->maincategory_name }}</a></span> --}}
					<span><a href="/">{{ 'Propiedades Digitales' }}</a> >> <a href="/forum/{{ $post->maincategory_url }}">{{ $post->maincategory_name }}</a></span>
					@endif

					@if($post->subcategory_id == 2)
					{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span> --}}
					{{-- <span><a href="">{{ 'Servicios' }}</a> >> <a href="">{{ $post->maincategory_name }}</a></span> --}}
					<span><a href="/">{{ 'Servicios' }}</a> >> <a href="/forum/{{ $post->maincategory_url }}">{{ $post->maincategory_name }}</a></span>
					@endif

					@endif

					{{-- <h1>{{ $categorys[0]->maincategory_name }}</h1> --}}

                    @if(!empty($tcalculres))
                    @if($tcalculres)

                    <div class="row bg-white">

                        <p class="calificacion">
                            
                          
                            <label for="radio1" style="color:orange">★</label>
                            
                            <label for="radio2" style="color:orange">★</label>

                            <label for="radio3" style="color:orange">★</label>

                            <label for="radio4" style="color:orange">★</label>

                            <label for="radio5" style="color:orange">★</label>
                            
                        </p>

                    </div>

                    <div class="row bg-white">
                       <p>
                        Valoración {{$tcalculres}}
                        ({{$tcaliserv}} calificaciones)
                    </p>
                </div>

                @endif

                @endif

                <div class="row covert bg-white">

                   
                 
                   

                  <div class="col-2 text-center text-light {{ $post->type_color }}">
                     <div>{{ $post->type_name }}:</div>
                 </div>

                 

                 <div class="">

                     {{--  {{ $tcalculres }} --}}

                     <h1 class="h1">{{ $post->post_name }}</h1>




                 </div>



             </div>
         </div>

         <!--Topic Section-->
         <div class="topic-container">
           <!--Original thread-->
           <div class="head">
              <div class="authors">Author</div>
              <div class="content">Topic: random topic (Read 1325 Times)</div>
          </div>

          <div class="body">
              <div class="authors">

                 <div class="covert-author">

                    {{-- 	<div class="username"><a href="/members/{{ $post->username }}/{{ $post->userid }}">{{$post->username}}</a></div> --}}
                    {{-- <div>Role</div> --}}
                    {{--   <img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt=""> --}}
                    {{-- <img src="{{URL('images')}}/{{$post->img}}" alt="" class="img-fluid"> --}}
                    <img src="{{URL('storage/uploads')}}/{{$post->img}}" alt="" class="custom-img">

                    <div class="username"><a href="/members/{{ $post->username }}/{{ $post->userid }}">{{$post->username}}</a></div>

                    @if($post->is_banned == 1)
                    <br>
                    <i class="fa-solid fa-x bg-danger display-4">Ban</i>
                    @endif

                    {{-- <div>Role</div> --}}
                    <div class="">{{$post->rank_name}}</div>
                    <img src="{{URL('images/flags')}}/{{$post->country_flag}}" alt="" class="custom-img">
                    <div class="">{{$post->country_name}}</div>
                    <div>Posts: <u>{{$sumpost}}</u></div>
                    {{-- 	<div>Points: <u>4586</u></div> --}}

                </div>



						{{-- @foreach($califications as $calification)
						<div>{{$calification->calification_name}}: <u>{{count((array)$calification->calification_id)}}</u></div>
						@endforeach --}}
						<div class="covert-calification">
							{{-- <div class="col-4"> --}}
								{{-- {{ $sumCalification = 0;}} --}}
								{{-- @foreach($califications as $calification) --}}

								<div class="">

									{{-- <p>{{$calification->calification_name}}</p> --}}
									{{-- 	<i class="{{$calification->calification_icon}} display-4 col-3"></i> --}}
									<div class="row">
										<div class="">
											<i class="{{$iconposi}} display-4"></i>
											{{-- <p class="{{$iconposicolor}} text-center display-4">{{$sumcalification}}</p> --}}
											<a href="/calification/{{$post->username}}" class=""><p class="{{$iconposicolor}} text-center display-4">{{$sumcalification}}</p></a>
{{-- 
	<a href="/conversation/{{$post->username}}" class="fas fa-envelope btn">Contactar</a> --}}
</div>

<div class="">
	<i class="{{$iconnega}} display-4 offset-2"></i>
	{{-- <p class="{{$iconnegacolor}} text-center display-4 offset-2">{{$restcalification}}</p> --}}
	<a href="/calification/{{$post->username}}" class=""><p class="{{$iconnegacolor}} text-center display-4 offset-2">{{$restcalification}}</p></a>
</div>

</div>
{{-- end row --}}
{{-- <p>{{$calification->calification_name}}</p> --}}

{{-- 	<p class="{{$calification->calification_color}} text-center display-4 col-3 offset-1">{{count((array)$calification->calification_id)}}</p> --}}
							{{-- 	<p class="{{$iconposicolor}} text-center display-4 col-3 offset-1">{{$sumcalification}}</p>
							--}}
							{{-- 	<p class="{{$iconnegacolor}} text-center display-4 col-3 offset-1">{{$restcalification}}</p> --}}
							{{-- 	<p class="{{$calification->calification_color}} text-center display-4 col-3 offset-1">{{$sumCalification +=count((array)$calification->calification_id)}}</p> --}}

							

						{{-- </div> --}}

                    		{{--  @if()

                    			@endif --}}   

                    			{{-- @endforeach --}}
                    			{{-- <p class="">{{$sumCalification}}</p> --}}

                    			{{-- 	<p>{{$post->username}}</p> --}}
                    			{{-- <a href="/conversation/{{$post->username}}/{{$post->postid}}/message-thread" class="fas fa-envelope btn">Contactar</a>

                    			<a href="/calification/{{$post->username}}/{{$post->postid}}/calification-thread" class="fas fa-plus btn">Calificar</a> --}}

                    			@if(Auth::user())
                    			@if(Auth::user()->statu_id == 1 && Auth::user()->is_verified == 1)
                    			@if($post->is_banned == 0)

                    			<div class="row">
                    				<a href="/conversation/{{$post->username}}/{{$post->postid}}/message-thread" class="fas fa-envelope btn">Contactar</a>
{{-- 
	<a href="/calification/{{$post->username}}/{{$post->postid}}/calification-thread" class="fas fa-plus btn">Calificar</a> --}}
</div>


<div class="row">
	{{-- <a href="/conversation/{{$post->username}}/{{$post->postid}}/message-thread" class="fas fa-envelope btn">Contactar</a> --}}

	<a href="/calification/{{$post->username}}/{{$post->postid}}/calification-thread" class="fas fa-plus btn">Calificar</a>
</div>

@endif

@endif
@endif

</div>

</div>


</div>
<div class="content">

	<div class="row">

		<div class="bg-success text-white col-6 forms-info">

			<p>Precio: {{$post->price}}$</p>
			<p>Comisiones: {{$post->comition_name}}</p>
			<p>Procesador de Pagos: {{$post->payment_name}}</p>
			<p>Revisiones: {{$post->revition}}</p>

		</div>

	</div>
	<hr>
	<br>

	{{-- <?php print_r($post->post_content)?> --}}
	{!! $post->post_content !!}
	<br>
                    {{-- Just a random content of a random topic.
                    <br>To see how it looks like.
                    <br><br>
                    Nothing more and nothing less.
                    <br>
                    <hr>
                    Regards username
                    <br> --}}

                    <div class="comments">                    	
                    	<b>{{ date('d-m-Y',strtotime($post->created_at)) }}</b> 
                    </div>

                    @if(Auth::user())   

                    @if(Auth::user()->role_id == 1)   
                    <div class="comment">
                    	{{-- <button onclick="showComment()">Comment</button> --}}
                    	{{-- <a href="post/unpublish/{{ $post->postid }}" class="btn btn-danger btn-sm">Ocultar</a> --}}

                    	<a class="btn btn-danger" onclick="postUnpublish({{ $post->postid }})">
                    		<span class="fas fa-arrow-right"></span>		
                    	Ocultar</a>  
                    </div>
                    @endif

                    @endif

                </div>
            </div>
        </div>

        <!--Comment Area-->
        <div class="comment-area hide" id="comment-area">
        	<textarea name="comment" id="" placeholder="comment here ... "></textarea>
        	<input type="submit" value="submit">
        </div>

        <!--Comments Section-->
        @foreach($comments as $comment)
        <div class="comments-container">
        	<div class="body">
        		<div class="authors">

        			<div class="covert-author">

        				{{-- <div class="username"><a href="/members/{{ $comment->username }}/{{ $comment->userid }}">{{ $comment->username }}</a></div> --}}
        				{{-- <div>Role</div> --}}
        				<img src="{{URL('storage/uploads')}}/{{$comment->img}}" alt="" class="custom-img">
        				<div class="username"><a href="/members/{{ $comment->username }}/{{ $comment->userid }}">{{ $comment->username }}</a></div>

        				{{-- @if($post->is_banned == 1)
        				<br>
        				<i class="fa-solid fa-x bg-danger display-4">Ban</i>
        				@endif --}}

        				{{-- <div>Role</div> --}}
        				<div class="">{{$comment->rank_name}}</div>
                        <img src="{{URL('images/flags')}}/{{$post->country_flag}}" alt="" class="custom-img">
                        <div class="">{{$comment->country_name}}</div>
                        <div>Posts: <u>{{$sumpostcomment}}</u></div>
                        {{-- 	<div>Points: <u>4586</u></div> --}}
        				{{-- <div>Posts: <u>455</u></div>
        					<div>Points: <u>4586</u></div> --}}

        				</div>

                      <div class="covert-calification">
                         {{-- <div class="col-4"> --}}
                            {{-- {{ $sumCalification = 0;}} --}}
                            {{-- @foreach($califications as $calification) --}}

                            <div class="">

                               {{-- <p>{{$calification->calification_name}}</p> --}}
                               {{-- 	<i class="{{$calification->calification_icon}} display-4 col-3"></i> --}}
                               <div class="row">
                                  <div class="">
                                     <i class="{{$iconposicomment}} display-4"></i>
                                     {{-- <p class="{{$iconposicolor}} text-center display-4">{{$sumcalification}}</p> --}}
                                     <a href="/calification/{{$comment->username}}" class=""><p class="{{$iconposicolorcomment}} text-center display-4">{{$sumcalificationcomment}}</p></a>
{{-- 
	<a href="/conversation/{{$post->username}}" class="fas fa-envelope btn">Contactar</a> --}}
</div>

<div class="">
	<i class="{{$iconnegacomment}} display-4 offset-2"></i>
	{{-- <p class="{{$iconnegacolor}} text-center display-4 offset-2">{{$restcalification}}</p> --}}
	<a href="/calification/{{$comment->username}}" class=""><p class="{{$iconnegacolorcomment}} text-center display-4 offset-2">{{$restcalificationcomment}}</p></a>
</div>

</div>
{{-- end row --}}


</div>

</div>

</div>

<div class="content">
    {!! $comment->comment !!}
        			{{-- Just a comment of the above random topic.
        			<br>To see how it looks like.
        			<br><br>
        			Nothing more and nothing less. --}}
        			<br>
        			<br>
                    <div class="comments">                    	
                    	<b>{{ date('d-m-Y',strtotime($comment->created_at)) }}</b> 
                    </div>

                    <div class="comment">

                        @if(Auth::user())   

                        @if(Auth::user()->role_id == 1)   
                        <div class="comment">
                           {{-- <button onclick="showReply()">Reply</button> --}}
                           {{-- <a href="comentunpublish/{{ $post->postid }}" class="btn btn-danger btn-sm">Ocultar</a> --}}

                           <a class="btn btn-primary" onclick="comentUnpublish({{ $post->postid }})">
                              <span class="fas fa-arrow-right"></span>		
                          Ocultar</a>        					


                      </div>
                      @endif

                      @endif

                  </div>
              </div>
          </div>
      </div>
      @endforeach

        {{-- <div class="comments-container">
        	<div class="body">
        		<div class="authors">
        			<div class="username"><a href="">AnotherUser</a></div>
        			<div>Role</div>
        			<img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt="">
        			<div>Posts: <u>455</u></div>
        			<div>Points: <u>4586</u></div>
        		</div>
        		<div class="content">
        			Just a comment of the above random topic.
        			<br>To see how it looks like.
        			<br><br>
        			Nothing more and nothing less.
        			<br>
        			<br>
        			<div class="comment">
        				<button onclick="showReply()">Reply</button>
        			</div>
        		</div>
        	</div>
        </div> --}}
        

        

    </div>

    @if(Auth::user())

    @if(Auth::user()->statu_id == 1 && Auth::user()->is_verified == 1)     

    <div class="bg-white container">

    	<div class="col-6 offset-4">

    		<br>
    		<br>
    		<br>	

    		<form action="{{ route('comment.store') }}" enctype="multipart/form-data" method="POST">
    			{{csrf_field()}}


    			{{-- 	<input type="hidden" name="username" id="username" value="{{$username}}"> --}}

    			<input type="hidden" name="post_id" id="post_id" value="{{$post->postid}}">


    			{{-- 	<div id="editor"></div> --}}

    			@if($errors->has('comment'))
    			<div class="text-danger" id="msg_email">{{ $errors->first('comment') }}</div>
    			@endif

    			<textarea name="comment" class="editor" id="editor">

    			</textarea>


    			{{--     end --}}
    			<br>
    			<div class="form-group">

    				<div class="offset-2 col-sm-8" >                                       

    					<button type="submit" class="btn btn-primary btn-user btn-block">Send</button>


    					<br>
    					<br>
    					<br>

    					<br>
    					<br>
    					<br>		

    				</div>

    			</div>   

    		</form>       




    	</div>




    </div> 

    @endif





</div>

@endif




</div>

<script>
	// ClassicEditor
	// .create( document.querySelector( '#editor' ) )
	// .catch( error => {
	// 	console.error( error );
	// } );

	ClassicEditor
	.create( document.querySelector( '#editor' ), {
		link: {
			decorators: {
                // toggleDownloadable: {
                //     mode: 'manual',
                //     label: 'Downloadable',
                //     attributes: {
                //         download: 'file'
                //     }
                // },
                openInNewTab: {
                	mode: 'manual',
                    // label: 'Open in a new tab',
                    defaultValue: true,			// This option will be selected by default.
                    attributes: {
                    	target: '_blank',
                        // rel: 'noopener noreferrer'
                        rel: 'nofollow ugc',
                    }
                }
            }
        }
        // More of the editor's configuration.
 		// ...
 	} )
	.then( /* ... */ )
	.catch( /* ... */ );

</script>


@if(Auth::user())

@if(Auth::user()->role_id == 1)  
<script type="text/javascript">

	

	function postUnpublish(postid)
	{ 

				// alert(id);


				$.ajax({
					// url: BASE_URL + '/members/ignored'+id, 
					// url: 'http://127.0.0.1:8000' + '/postunpublish/'+postid,
					url: BASE_URL + '/postunpublish/'+postid,       
					// dataType: 'json',
					type: 'GET'    
				})
				.done(function(result) {      

					// console.log(result);

					// alert(result);

					// $("#msg_notification").html('<p>Ya no recibiras mensajes de este Usuario</p>');
					// window.location=BASE_URL + '/';

					// window.location = 'http://127.0.0.1:8000' + '/';

					window.location = BASE_URL + '/';

      // chartData(result);

  });


			}

			function comentUnpublish(postid)
			{ 

				// alert(id);


				$.ajax({
					// url: BASE_URL + '/members/ignored'+id, 
					// url: 'http://127.0.0.1:8000' + '/comentunpublish/'+postid,
					url: BASE_URL + '/comentunpublish/'+postid,         
					// dataType: 'json',
					type: 'GET'    
				})
				.done(function(result) {      

					// console.log(result);

					// alert(result);

					// $("#msg_notification").html('<p>Ya no recibiras mensajes de este Usuario</p>');
					// window.location=BASE_URL + '/';

					// window.location = 'http://127.0.0.1:8000' + '/';

					window.location = BASE_URL + '/';

      // chartData(result);

  });


			}

			
			
		</script>

		@endif

		@endif

        {{-- ejemplo --}}
       {{--  <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "Review",
              "itemReviewed": {
              "@type": "Thing",
              "name": "Programador LAMP Stack, PHP, Laravel, Symfony"
          },
          "reviewBody": "Buen servicio de php, rápido y seguro",
          "author": {
          "@type": "Person",
          "name": "Jonathan Castro"
      },
      "reviewRating": {
      "@type": "Rating",
      "ratingValue": "2",
      "bestRating": "5"
  }
}
</script> --}}

{{--  <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "Review",
              "itemReviewed": {
              "@type": "Thing",
              "name": "{{ $post->post_name }}"
          },
          "reviewBody": "Buen servicio de php, rápido y seguro",
          "author": {
          "@type": "Person",
          "name": "Jonathan Castro"
      },
      "reviewRating": {
      "@type": "Rating",
      "ratingValue": "{{$sumcalification}}",
      "bestRating": "5"
  }
}
</script> --}}

{{-- <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Review",
      "author": "calificacion",
      "itemReviewed": {
      "@type": "Product",
      "name": "{{ $post->post_name }}",
      "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": 5,
      "bestRating": 5,
      "ratingCount": 2
  }         
},
"reviewRating": {
"@type": "Rating",
"ratingValue": "5",
"bestRating": "5"
}
}
</script>
--}}

@if($tcalculres >= 1)

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Review",
      {{-- "author": "calificacion", --}}
      "author":
      [
      {
          "@type":"Organization",
          "name": "ForoWorkers"
      }
      ],
      "itemReviewed": {
      "@type": "Product",
      "name": "{{ $post->post_name }}",
      "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": {{ $tcalculres }},
      "bestRating": 5,
      "ratingCount": {{ $tcaliserv }}
  }         
},
"reviewRating": {
"@type": "Rating",
"ratingValue": "{{ $tcalculres }}",
"bestRating": "5"
},
"offers": {

"@type": "Offer",

{{--  "url": "https://example.com/anvil", --}}

"priceCurrency": "USD",

"price": "{{ $post->price }}",

{{--   "priceValidUntil": "2020-11-20", --}}

"itemCondition": "https://schema.org/UsedCondition",

"availability": "https://schema.org/InStock"

}
}
</script>


@endif


@if($post->type_id == 2)

<script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "JobPosting",
      "datePosted": "{{ date('d-m-Y',strtotime($post->created_at)) }}",
      "description": "{!! $post->post_content !!}",
      "hiringOrganization" : {
      "@type": "Organization",
      "name": "Importante Empresa del País"
  },
  "jobLocation": {
  "@type": "Place",
  "address": {
  "@type": "PostalAddress",
  "streetAddress": "Caracas, Distrito Capital",
  "addressLocality": "Caracas, Distrito Capital",
  "addressRegion": "Caracas, Distrito Capital",
  "addressCountry": "Venezuela"
}
},
"baseSalary": {
"@type": "MonetaryAmount",
"currency": "USD",
"value": {
"@type": "QuantitativeValue",
"value": 5.00,
"unitText": "HOUR"
}
},
"title": "{{$post->post_name}}",
"validThrough": "{{ date('d-m-Y',strtotime($post->created_at)) }}",
"employmentType": ["CONTRACTOR","OTHER"],
"identifier": {
"@type": "PropertyValue",
"name": "Importante Empresa del País",
"value": "{{$post->userid}}"
}
}
</script>

@endif



{{-- review": {
"@type": "Review",
"author": "Daniela",
"datePublished": "2016-11-01",
"description": "Fantastic product! It really helped me. I would recommend to all my friends and family.",
"name": "Awesome!",
"reviewRating": {
"@type": "Rating",
"bestRating": "5",
"ratingValue": "5",
"worstRating": "1"
}
}

"review" : {
"@type" : "Review",
"author" : {
"@type" : "Person",
"name" : "Daniela"
},
"datePublished" : "2017-06-08",
"reviewRating" : {
"@type" : "Rating",
"ratingValue" : "5",
"bestRating" : "5",
"worstRating" : "0"
},
"reviewBody" : "Fantastic product! It really helped me. I would recommend to all my friends and family. "
} --}}





@include('inc/footer')

@endsection 






