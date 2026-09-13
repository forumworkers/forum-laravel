@extends('layouts/app')
@section('meta')

<title>{{ 'Registro' }}</title> 

<link rel="canonical" href="https://foroworkers.com/register" />

<meta name="description" content="Registrarse en foroworkers.com, crear una cuenta">

@endsection 
{{-- @section('title','Login') --}}
@section('content')
@include('inc/navbar')

{{-- <x-guest-layout> --}}
  <!-- Session Status -->
  {{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

  <div class="row">

    <div class="col-lg-8 mb-4 offset-md-2">

     <div class="card-body">

      <h1>Registro: Crear una cuenta</h1>
      <br>
      <br>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- username -->

        <!-- Email Address -->
        <div>


         {{-- <div class="form-group">
          <input type="test" class="form-control form-control-user" name="username" id="username"  placeholder="Ejemplo: johndoe19" >
          @if($errors->has('username'))
          <div class="text-danger" id="msg_email">{{ $errors->first('username') }}</div>
          @endif

        </div> --}}
      </div>

      <!-- Email Address -->
      <div>              

       <div class="form-group">
        <input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="JonDoe@gmail.com" >
        @if($errors->has('email'))
        <div class="text-danger" id="msg_email">{{ $errors->first('email') }}</div>
        @endif

      </div>
    </div>

    <!-- Password -->
    <div class="">


     <div class="form-group">
      <input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="Password ...." > 
      @if($errors->has('password'))
      <div class="text-danger" id="msg_email">{{ $errors->first('password') }}</div>
      @endif     
    </div>

  </div>

   <!-- Sum -->
    <div class="">

      @if (session('msg_exception'))
          <div class="alert alert-danger">
            {{ session('msg_exception') }}
          </div>
          @endif


     <div class="form-group">
      <label>Cual es la suma de? {{$numberone}}+{{$numbertwo}}</label>
      <input type="number" class="form-control form-control-user" name="totalsum" id="sum" placeholder="ejem: 100"> 
      @if($errors->has('totalsum'))
      <div class="text-danger" id="msg_totalsum">{{ $errors->first('totalsum') }}</div>
      @endif     
    </div>

  </div>

  <!-- Remember Me -->
  <div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
      <input id="terms" name="terms" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
      <span class="ml-2 text-sm text-gray-600">{{ __('Aceptar Términos de ForoWorkers') }}</span>
    </label>
  </div>

  <div class="flex items-center justify-end mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif --}}


                <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

              </div>








            </form>

          </div> {{-- end card --}}

        </div> {{-- end col --}}

      </div> {{-- end row --}}

      @include('inc/footer')

      @endsection
