@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')

{{-- <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script> --}}

<script src="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.umd.js"></script>

 <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css" />


<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.ck.ck-editor__editable_inline>:last-child {
			margin-bottom: 250px;
		}
		/*code.language-plaintext {
			background-color: gray !important;
		}*/
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>

	<div class="row">

		<div class="container">

			@if(Auth::user()->is_banned == 1)
			<p class="display-4">Baneado por incumplir las reglas del sitio</p>
			@endif

			{{-- <div class="col-8 offset-2">

				<h1 class="bg-white">Publicar Tema</h1>
			</div> --}}

			{{-- <a href="" class="btn btn-warning">Publicar Tema</a> --}}



			<div class="bg-white">

				<div class="col-8 offset-2">

					<h1 class="display-4">Publicar Tema</h1>
					<br>
					<h2>Zona Comunidad Post ilimitados, completa verificacion de 3 pasos para publicar en la seccion de negocios</h2>
					<hr>
				</div>

				<br>

				<br>

				<div class="col-8 offset-2">

					@if(Auth::user()->statu_id == 1 || Auth::user()->statu_id == 1 && Auth::user()->is_banned == 0)	

					<form action="{{ route('postfree.store') }}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}

						<input type="text" class="form-control form-control-user" name="post_name" id="postal_code"  placeholder="Post Name">
						@if($errors->has('post_name'))
						<div class="text-danger" id="msg_email">{{ $errors->first('post_name') }}</div>
						@endif

						{{-- <input type="text" class="form-control form-control-user" name="url_name" id="postal_code"  placeholder="Url"> --}}

					{{-- <select class="form-control" name="maincategory_id" id="maincategory_id">
						<option id="option" value="">Category</option>
						<option value="{{$categoryid}}">{{$categoryid}}</option>						     
					</select> --}}

					<input type="hidden" name="maincategory_id" id="maincategory_id" value="{{$categoryid}}">				
					
					

					{{-- 	<div id="editor"></div> --}}

					@if($errors->has('post_content'))
					<div class="text-danger" id="msg_email">{{ $errors->first('post_content') }}</div>
					@endif



					<select class="form-control" name="content_id" id="content_id">

						@foreach($contents as $content)

						<option value="{{$content->id}}">{{$content->content_name}}</option>
						@endforeach	

					</select>

					<textarea name="post_content" id="editor">

					</textarea>


					{{--     end --}}
					<br>
					<div class="form-group">

						<div class="offset-2 col-sm-8" >                                       

							<button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

						</div>

					</div>   

				</form>       


				<br>

				<br>


			</div>

			@endif

			{{-- 	end publicar ban --}}




		</div>


	</div> 

</div>

<script>
	// ClassicEditor
	// .create( document.querySelector( '#editor' ) )
	// .catch( error => {
	// 	console.error( error );
	// } );

	// ClassicEditor
	// .create( document.querySelector( '#editor' ), {
	// 	toolbar: {
	// 		items: [
	// 		'link',
 //                // More toolbar items.
 //                // ...
 //                ],
 //            },
 //            link: {
 //            // Automatically add target="_blank" and rel="noopener noreferrer" to all external links.
 //            addTargetToExternalLinks: true,

 //            // Let the users control the "download" attribute of each link.
 //            decorators: [
 //            {
 //            	mode: 'manual',
 //            	// label: 'Downloadable',
 //            	attributes: {
 //            		// download: 'download'
 //            		rel: 'nofollow',
 //            		target: '_blank',
 //            	}
 //            }
 //            ]
 //        }
 //    } )
	// .then( /* ... */ )
	// .catch( /* ... */ );

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
                        rel: 'nofollow',
                    }
                }
            }
        }
                } )
                .then( /* ... */ )
                .catch( /* ... */ );


</script>

@endsection 






