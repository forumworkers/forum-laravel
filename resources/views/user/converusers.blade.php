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

    <div class="">

       <div class="container">


          <div class="container">
             <!--Navigation-->
             <div class="navigate">
                {{-- <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a> >> <a href="">{{$messages->post_name}}</a></span> --}}
                <a href="">Conversar sobre:{{$messages->post_name}}</a></span>
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
                      <div class="username"><a href="/members/{{$usermsg->username}}/{{ $usermsg->id }}">{{$usermsg->username}}</a></div>
                      {{-- <div>Role</div> --}}
                      {{--   <img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt=""> --}}
                      <img src="{{URL('storage/uploads')}}/{{$usermsg->img}}" alt="">
                      {{-- 	<img src="http://127.0.0.1:8000/images/user.png" alt=""> --}}




                      {{-- <div>Posts: <u>45</u></div>
                      <div>Points: <u>4586</u></div> --}}
						{{-- @foreach($califications as $calification)
						<div>{{$calification->calification_name}}: <u>{{count((array)$calification->calification_id)}}</u></div>
						@endforeach --}}
						<div class="">
							{{-- <div class="col-4"> --}}
								{{-- {{ $sumCalification = 0;}} --}}
                             {{-- @foreach($califications as $calification) --}}

                             <div class="">

                                {{-- <p>{{$calification->calification_name}}</p> --}}
                                {{-- 	<i class="{{$calification->calification_icon}} display-4 col-3"></i> --}}
                                <div class="row">
							{{-- <div class="">
								<i class="{{$iconposi}} display-4"></i>
									<p class="{{$iconposicolor}} text-center display-4">{{$sumcalification}}</p>
								</div> --}}

								{{-- <div class="">
								<i class="{{$iconnega}} display-4 offset-2"></i>
									<p class="{{$iconnegacolor}} text-center display-4 offset-2">{{$restcalification}}</p>
								</div> --}}

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


                              <div class="row">
                                 {{-- <a href="/conversation/{{$post->username}}/{{$post->postid}}/message-thread" class="fas fa-envelope btn">Contactar</a> --}}
{{-- 
 <a href="/calification/{{$post->username}}/{{$post->postid}}/calification-thread" class="fas fa-plus btn">Calificar</a> --}}
</div>


<div class="row">
 {{-- <a href="/conversation/{{$post->username}}/{{$post->postid}}/message-thread" class="fas fa-envelope btn">Contactar</a> --}}
{{-- 
 <a href="/calification/{{$post->username}}/{{$post->postid}}/calification-thread" class="fas fa-plus btn">Calificar</a> --}}
</div>

</div>

</div>


</div>
<div class="content">

  {{-- <?php print_r($post->post_content)?> --}}
  {{-- {!! $post->post_content !!} --}}
  {!! $messages->message !!}
  {{-- <h4>{!! $messages->message !!}</h4> --}}
  <br>
                    {{-- Just a random content of a random topic.
                    <br>To see how it looks like.
                    <br><br>
                    Nothing more and nothing less.
                    <br>
                    <hr>
                    Regards username
                    <br> --}}
                    <div class="comment">
                    	{{-- <button onclick="showComment()">Comment</button> --}}
                    </div>
                </div>
            </div>
        </div>

        <!--Comment Area-->
        <div class="comment-area hide" id="comment-area">
            <textarea name="comment" id="" placeholder="comment here ... "></textarea>
            <input type="submit" value="submit">
        </div>

        <!--Replys Section-->
        @foreach($replys as $reply)
        <div class="comments-container">
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="/members/{{ $reply->username }}/{{ $reply->userid }}">{{ $reply->username }}</a></div>
                   {{--  <div>Role</div> --}}
                    <img src="{{URL('storage/uploads')}}/{{$reply->img}}" alt="">
                    {{-- <div>Posts: <u>455</u></div>
                    <div>Points: <u>4586</u></div> --}}
                </div>
                <div class="content">
                    {!! $reply->reply !!}
                    {{-- Just a comment of the above random topic.
                    <br>To see how it looks like.
                    <br><br>
                    Nothing more and nothing less. --}}
                    <br>
                    <br>
                    <div class="comment">
                        {{-- <button onclick="showReply()">Reply</button> --}}
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

    <div class="bg-white container">

        <div class="col-6 offset-4">

            <br>
            <br>
            <br>    

            <form action="{{ route('reply.store') }}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}


                {{--    <input type="hidden" name="username" id="username" value="{{$username}}"> --}}

                <input type="hidden" name="message_id" id="message_id" value="{{$messages->message_id}}">


                {{--    <div id="editor"></div> --}}

                @if($errors->has('reply'))
                <div class="text-danger" id="msg_email">{{ $errors->first('reply') }}</div>
                @endif

                <textarea name="reply" class="editor" id="editor">

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





</div>


@endif




</div>

<script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
</script>

@endsection 






