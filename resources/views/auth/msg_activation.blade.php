@extends('layouts/app')
{{-- @section('title','Login') --}}
@section('content')
@include('inc/navbar')

{{-- <x-guest-layout> --}}
  <!-- Session Status -->
  {{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

  <div class="row">

    <div class="col-lg-8 mb-4 offset-md-2">

     <div class="card-body">
      <br>
      <br>

  	<p class="bg-success">Email verificado ingrese en la aplicacion.</p>

                      </div> {{-- end card --}}

                    </div> {{-- end col --}}

                  </div> {{-- end row --}}

                  @endsection
