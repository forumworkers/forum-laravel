@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.ck.ck-editor__editable_inline>:last-child {
			margin-bottom: 250px;
		}
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
					<h2>5 Temas únicos para usuarios Free y 20 para Premium</h2>
					<hr>
				</div>

				<br>

				<br>

				<div class="col-8 offset-2">

					@if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1 && Auth::user()->is_verified == 1 && Auth::user()->is_banned == 0 || Auth::user()->statu_id == 1 &&  Auth::user()->is_buyer == 0 && Auth::user()->is_verified == 1 && Auth::user()->is_banned == 0)	

					<form action="{{ route('post.store') }}" enctype="multipart/form-data" method="POST">
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

					<input type="number" class="form-control form-control-user" name="price" id="price"  placeholder="Precio">

					@if($errors->has('price'))
					<div class="text-danger" id="msg_email">{{ $errors->first('price') }}</div>
					@endif

					@if($subid->subcategory_id == 1)


					<select class="form-control" name="type_id" id="type_id">

						<option value="4">Compra</option>
						<option value="5">Venta</option>
						<option value="3">Constancia</option>
						<option value="6">Intercambio</option>

					</select>

					@endif


					@if($subid->subcategory_id  == 2)


					<select class="form-control" name="type_id" id="type_id">

						<option value="1">Me Ofrezco</option>
						<option value="2">Se Solicita</option>
						<option value="3">Constancia</option>
						<option value="6">Intercambio</option>

					</select>

					@endif


{{-- 
					<select class="form-control" name="type_id" id="type_id">
						@foreach($types as $type)
						<option id="option" value="">Category</option>
						<option value="{{$type->id}}">{{$type->type_name}}</option>
						@endforeach						     
					</select> --}}

					<select class="form-control" name="comition_id" id="comition_id">
						@foreach($comitions as $comition)
						
						<option value="{{$comition->id}}">{{$comition->comition_name}}</option>
						@endforeach						     
					</select>

					<select class="form-control" name="payment_id" id="payment_id">
						@foreach($payments as $payment)
						
						<option value="{{$payment->id}}">{{$payment->payment_name}}</option>
						@endforeach						     
					</select>

					<select class="form-control" name="revition_id" id="revition_id">
						@foreach($revitions as $revition)
						
						<option value="{{$revition->id}}">{{$revition->revition}}</option>
						@endforeach						     
					</select>

					@if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1)
					<select class="form-control" name="site_id" id="site_id">
						@foreach($sites as $site)
						{{-- <option id="option" value="">Category</option> --}}
						<option value="{{$site->id}}">{{$site->site}}</option>
						@endforeach						     
					</select>
					@endif

					@if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 0)
					<select class="form-control" name="site_id" id="site_id">
						{{-- 	@foreach($sites as $site) --}}
						{{-- <option id="option" value="">Category</option> --}}
						<option value="2">Seccion Free</option>
						{{-- @endforeach	 --}}					     
					</select>
					@endif
					
					

					{{-- 	<div id="editor"></div> --}}

					@if($errors->has('post_content'))
					<div class="text-danger" id="msg_email">{{ $errors->first('post_content') }}</div>
					@endif

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
                        rel: 'nofollow',
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

@endsection 






