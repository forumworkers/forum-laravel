@extends('layouts/app')

@section('meta')

{{-- <title>{{ 'Conversando'.' - '.$post->post_name }} {{$post->maincategory_id}}/{{$post->postid}}</title> --}}

{{-- <title>{{ $post->post_name }} {{$post->maincategory_id}}/{{$post->postid.' - '.'Conversando'}}</title> --}}

<title>{{ $post->post_name }} {{$post->maincategory_id}}/{{$post->postid}}</title>


{{-- <link rel="canonical" href="https://foroworkers.com/{{$post->subcategory_url}}/{{$post->maincategory_url}}/tema/{{$post->url_name}}.{{ $urluserid }}{{ $urlpostid }}" /> --}}

<link rel="canonical" href="https://foroworkers.com/{{$post->subcategory_url}}/{{$post->maincategory_url}}/tema/{{$post->url_name}}.{{ $urluserid }}{{ $urlpostid }}" />





<meta name="description" content="Conversando en {{$post->post_name}} {{$post->maincategory_id}}/{{$post->postid}} , tasa de café con foroworkers.com">

<meta property="og:type" content="article" />

{{-- <meta property="og:title" content="{{ 'Conversando'.' - '.$post->post_name }} {{$post->maincategory_id}}/{{$post->postid}}" /> --}}

<meta property="og:title" content="{{ $post->post_name }} {{$post->maincategory_id}}/{{$post->postid}}" />


{{-- <meta property="og:description" content="Conversando en {{$post->post_name}} {{$post->maincategory_id}}/{{$post->postid}} , tasa de café con foroworkers.com" /> --}}

<meta property="og:description" content="Conversando en {{$post->post_name}} {{$post->maincategory_id}}/{{$post->postid}} , tasa de café con foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/{{$post->subcategory_url}}/{{$post->maincategory_url}}/tema/{{$post->url_name}}.{{ $urluserid }}{{ $urlpostid }}" /> 

@endsection 
{{-- @section('title','SubCategory') --}}
@section('content')

@if(Auth::user())   

{{-- <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script> --}}

<script src="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.umd.js"></script>

 <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css" />

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

 @endif

@if(!Auth::user())  

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

 @endif

{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}



<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.ck.ck-editor__editable_inline>:last-child {
			margin-bottom: 250px;
		}

		pre {
			/*background-color: #F8F8FF !important;*/
			background-color: #DCDCDC !important;
		}

		code {
		/*	 font-family: Arial, Helvetica, sans-serif;*/
			 font-weight: bold;
			  font-size: 14px !important;
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

					@if($post->subcategory_id == 3)
					{{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span> --}}
					{{-- <span><a href="">{{ 'Comunidad' }}</a> >> <a href="">{{ $post->maincategory_name }}</a></span> --}}
					<span><a href="/">{{ 'Comunidad' }}</a> >> <a href="/comunidad/{{ $post->maincategory_url }}">{{ $post->maincategory_name }}</a></span>
					@endif

					<br>
					<div class="row">
						<div class="offset-2">
							{{-- <a  href="https://es.fiverr.com/s/rVWNey" target="_blank"> --}}

								@if($post->promo_banner)

								<a  href="{{ $post->promo_url }}" rel="nofollow" target="_blank" onclick="getCategory({{ $post->maincategory_id }})" >

							
								<img src="{{URL('images')}}/banners/{{ $post->promo_banner }}" alt="Banner de {{ $post->maincategory_name }}">

								

								</a>

								@else

								<a onclick="getCategory({{ $post->maincategory_id }})" >

							
								<img src="{{URL('public/images')}}/banners/alquiler_banner.png" alt="Alquiler Banner de {{ $post->maincategory_name }}">

								

								</a>

								@endif

                                @if($post->post_img)

                                <br>

                                <div>

                                <img src="{{URL('storage/uploads')}}/{{$post->post_img}}" alt="{{$post->post_name}}" class="img-fluid" style="padding-top: 25px;">

                            </div>

                                @endif

								
							{{-- </a> --}}
						</div>
					</div>
					<br>

					{{-- @if($post->subcategory_id == 2)
					
					<span><a href="">{{ 'Servicios' }}</a> >> <a href="">{{ $post->maincategory_name }}</a></span>
					@endif --}}

					@endif

					{{-- <h1>{{ $categorys[0]->maincategory_name }}</h1> --}}

					<div class="row covert bg-white">

						{{-- <div class="col-2 text-center text-light bg-danger">
							<div>Comunidad:</div>
						</div> --}}

                        <div class="col-2 text-center text-light {{ $post->content_color }}">
                             <div>{{ $post->content_name }}:</div>
                         </div>

						<div class="">
							<h1 class="h1">{{ $post->post_name }}</h1>
						</div>

						@if($post->url_patreon)

						<a href="https://www.patreon.com/{{ $post->url_patreon }}" class="fa-brands fa-patreon btn btn-dark" target="_blank" rel="nofollow">Donar al Author</a>	

						@else

						<a class="fa-brands fa-patreon btn btn-dark text-white">Configura tu cuenta de Patreon para recibir donaciones</a>							

						@endif					

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






						</div>
						<div class="content">

							<div class="row">

								@if($post->url_patreon)

						<a href="https://www.patreon.com/{{ $post->url_patreon }}" class="fa-brands fa-patreon btn btn-dark" target="_blank" rel="nofollow">Donar al Author</a>	

						@else

						<a class="fa-brands fa-patreon btn btn-dark text-white">Agrega tu nick de Patreon para recibir donaciones</a>							

						@endif	

		{{-- <div class="bg-success text-white col-6 forms-info">

			<p>Precio: {{$post->price}}$</p>
			<p>Comisiones: {{$post->comition_name}}</p>
			<p>Procesador de Pagos: {{$post->payment_name}}</p>
			<p>Revisiones: {{$post->revition}}</p>

		</div> --}}

	</div>
	{{-- <hr> --}}
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



        			</div>

        			<div class="content">

        				<div class="row">

        				@if($comment->url_patreon)

						<a href="https://www.patreon.com/{{ $comment->url_patreon }}" class="fa-brands fa-patreon btn btn-info" target="_blank" rel="nofollow">Donar al Colaborador</a>	

						@else

						<a class="fa-brands fa-patreon btn btn-info text-white">Configura tu cuenta de Patreon para recibir donaciones</a>							

						@endif
					</div>
					<br>

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


         @if($post->content_id == 3 || $post->content_id == 4)     

    <div class="bg-white container">

    	<div class="col-6 offset-4">

    		<br>
    		<br>
    		<br>

           

    		{{-- <form action="{{ route('comment.store') }}" enctype="multipart/form-data" method="POST"> --}}
    			<form action="{{ route('comment.storefree') }}" enctype="multipart/form-data" method="POST">
    				{{csrf_field()}}


    				{{-- 	<input type="hidden" name="username" id="username" value="{{$username}}"> --}}

    				<input type="hidden" name="post_id" id="post_id" value="{{$post->postid}}">

    				<input type="hidden" name="maincategory_id" id="maincategory_id" value="{{$post->maincategoryid}}">


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

    	 @endif





    </div>

    @endif




</div>

@if(Auth::user())   

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

{{-- se esta usando este --}}
<script>
	const {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph,
        CodeBlock,
        AutoLink,
        Link,
        Heading,
        List  
    } = CKEDITOR;

    // se mete el plugin en const y en toolbar para usarlo
    ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    plugins: [ Essentials, Bold, Italic, Font, Paragraph, CodeBlock ,AutoLink, Link, Heading, List   ],
                    toolbar: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor','codeBlock','link','heading','bulletedList', 'numberedList'
                    ],
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
                } )
                .then( /* ... */ )
                .catch( /* ... */ );


</script>

 @endif


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

		@if($post->content_id == 1)

		@endif


		@if($post->content_id == 2)

		@endif

		@if($post->content_id == 3 && $comments->isEmpty())

		<script type="application/ld+json">
    {
"@context": "https://schema.org",
  "@type": "DiscussionForumPosting",
  "headline": "{{ $post->post_name }}",
"author": {
"@type": "Person",
"name": "{{$post->username}}",
"url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
},
"datePublished": "{{ $post->created_at }}",
"sharedContent": "{!! $post->post_content !!}",
"url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}"
}
    </script>

		@endif


	@if($post->content_id == 3 && $comments->isNotEmpty() && $sumpostcommentall == 1)

		<script type="application/ld+json">
    {
"@context": "https://schema.org",
  "@type": "DiscussionForumPosting",
  "headline": "{{ $post->post_name }}",
"author": {
"@type": "Person",
"name": "{{$post->username}}",
"url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
},
"datePublished": "{{ $post->created_at }}",
"sharedContent": "{!! $post->post_content !!}",
"url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}"
},
"interactionStatistic": {
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/ReplyAction",
    "userInteractionCount": "{{$sumpostcommentall}}"
  },
  "comment": [
      @foreach($comments as $comment)
      {
      	 
        "@type": "Comment",
        "text": "{!! $comment->comment !!}",
        "dateCreated": "{{$comment->created_at}}",
        "author": {
          "@type": "Person",
          "name": "{{$comment->username}}"
        }       
      }
       @endforeach       
      ]
    </script>   

		@endif

		@if($post->content_id == 3 && $comments->isNotEmpty() && $sumpostcommentall > 1)

		<script type="application/ld+json">
    {
"@context": "https://schema.org",
  "@type": "DiscussionForumPosting",
  "headline": "{{ $post->post_name }}",
"author": {
"@type": "Person",
"name": "{{$post->username}}",
"url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
},
"datePublished": "{{ $post->created_at }}",
"sharedContent": "{!! $post->post_content !!}",
"url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}"
},
"interactionStatistic": {
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/ReplyAction",
    "userInteractionCount": "{{$sumpostcommentall}}"
  },
  "comment": [
      @foreach($comments as $comment)
      {
      	 
        "@type": "Comment",
        "text": "{!! $comment->comment !!}",
        "dateCreated": "{{$comment->created_at}}",
        "author": {
          "@type": "Person",
          "name": "{{$comment->username}}"
        }       
      },
       @endforeach
       {
        "@type": "Comment",
        "text": "<p>Bienvenido al Foro</p>",
        "dateCreated": "{{$comment->created_at}}",
        "author": {
          "@type": "Organization",
          "name": "Foroworkers"
        }
      }        
      ]
    </script>  


		@endif

		{{-- este no sirve falta answercount y alguna answer --}}
		@if($post->content_id == 4 && $comments->isEmpty())

		<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "QAPage",
  "mainEntity": {
    "@type": "Question",
    "name": "{{ $post->post_name }}",
    "text": "{!! $post->post_content !!}",   
    "dateCreated": "{{ $post->created_at }}",
    "author": {
      "@type": "Person",
      "name": "{{$post->username}}"
    }
    
  }
}

      </script>  


		@endif

		@if($post->content_id == 4 && $comments->isNotEmpty() && $sumpostcommentall == 1)

		<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "QAPage",
  "mainEntity": {
    "@type": "Question",
    "name": "{{ $post->post_name }}",
    "text": "{!! $post->post_content !!}",
    "answerCount": {{$sumpostcommentall}},
    "dateCreated": "{{ $post->created_at }}",
    "author": {
      "@type": "Person",
      "name": "{{$post->username}}"
    },
    "suggestedAnswer": [
      @foreach($comments as $comment)
      {
      	 
        "@type": "Answer",
        "text": "{!! $comment->comment !!}",
        "dateCreated": "{{$comment->created_at}}",
        "author": {
          "@type": "Person",
          "name": "{{$comment->username}}"
        }       
      }
       @endforeach       
      ]
  }
}

      </script>  


		@endif


				@if($post->content_id == 4 && $comments->isNotEmpty() && $sumpostcommentall > 1)

		<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "QAPage",
  "mainEntity": {
    "@type": "Question",
    "name": "{{ $post->post_name }}",
    "text": "{!! $post->post_content !!}",
    "answerCount": {{$sumpostcommentall}},
    "dateCreated": "{{ $post->created_at }}",
    "author": {
      "@type": "Person",
      "name": "{{$post->username}}"
    },
    "suggestedAnswer": [
      @foreach($comments as $comment)
      {
      	 
        "@type": "Answer",
        "text": "{!! $comment->comment !!}",
        "dateCreated": "{{$comment->created_at}}",
        "author": {
          "@type": "Person",
          "name": "{{$comment->username}}"
        }       
      },
       @endforeach
       {
        "@type": "Answer",
        "text": "<p>Bienvenido al Foro</p>",
        "dateCreated": "{{$comment->created_at}}",
        "author": {
          "@type": "Organization",
          "name": "Foroworkers"
        }
      }       
      ]
  }
}

      </script>  


		@endif



        @if($post->content_id == 5)

        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "{{ $post->post_name }}",
      "image": [
        "{{URL('storage/uploads')}}/{{$post->post_img}}"        
       ],
      "datePublished": "{{ $post->created_at }}",
      "dateModified": "{{ $post->created_at }}",
      "author": [{
          "@type": "Person",
          "name": "Foroworkers",
          "url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
        }]
    }
    </script>

        @endif








    	



		@include('inc/footer')

<script type="text/javascript">

	function getCategory(category_id){

		// console.log(category_id);

		$.get(BASE_URL + '/api/find/category',
  {       
    category_id: category_id
      
  }, function(data) {  


    // console.log(data);

   

      

  })
  .fail(function(data, textStatus, xhr) {
    

    $("#msg_errors").html('<p>Request failed, Error Status'+ data.status +'</p>');

  });
	}

	</script>
		

   


		@endsection 






