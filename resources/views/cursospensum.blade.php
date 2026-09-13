@extends('layouts/app')

@section('meta')

<title>{{ $courses->pensum_name }} | {{$courses->course_name}}</title>


<link rel="canonical" href="https://foroworkers.com/curso/{{$courses->course_url}}/{{$courses->pensum_url}}" />




<meta name="description" content="Curso {{$courses->course_name}}, aprende {{$courses->pensum_kwone}},{{$courses->pensum_kwtwo}},{{$courses->pensum_kwthree}} en foroworkers.com">

<meta property="og:type" content="website" />



<meta property="og:title" content="{{ $courses->pensum_name }} | {{$courses->course_name}}" />


<meta property="og:description" content="Curso {{$courses->course_name}}, aprende {{$courses->pensum_kwone}},{{$courses->pensum_kwtwo}},{{$courses->pensum_kwthree}} en foroworkers.com" />

<meta property="og:url" content="https://foroworkers.com/curso/{{$courses->course_url}}/{{$courses->pensum_url}}" /> 

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

	<div class="col-5 offset-2">
{{-- <iframe class="embed-responsive" width="560" height="315" src="{{$courses->pensum_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}

{{-- <iframe class="embed-responsive" width="560" height="315" src="{{$courses->pensum_video}}" allow="autoplay; fullscreen" allowfullscreen></iframe> --}}

<iframe class="embed-responsive" width="420" height="345"  src="{{$courses->pensum_video}}?autoplay=1&mute=1" allow="autoplay"> </iframe>

{{-- <iframe
  width="300"
  height="200"
  src="mediaplayer.html"
  allow="autoplay 'src' https://example.media">
</iframe> --}}
			<br>

			<h1 class="display-4">{{$courses->pensum_id}}.{{$courses->pensum_name}}</h1>	
	</div>

	<div class="col-4">

			<div class="card">

		@foreach($pensums as $pensum)

			<div class="ubforum-row">

				<div class="ubforum-description subforum-column">


					<h4><i class="{{ $pensum->course_icon  }}"></i>{{ $pensum->pensum_id  }}<a href="/curso/{{ $pensum->course_url  }}/{{ $pensum->pensum_url  }}" class="">{{ $pensum->pensum_name }}</a></h4>

				</div>


			</div>


			@endforeach
	</div>

</div>

</div>
{{-- end row --}}



@include('inc/footer')
@endsection 



