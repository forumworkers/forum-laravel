@extends('layouts/app')
{{-- @section('title','Login') --}}
@section('meta')

<title>{{ 'Recuperar Contraseña' }}</title> 

<link rel="canonical" href="https://foroworkers.com/forgot-password" />

<meta name="description" content="Recuperar contraseña en foroworkers.com">

@endsection

@section('content')
@include('inc/navbar')

{{-- <x-guest-layout> --}}
  <!-- Session Status -->
  {{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

  <div class="row">

    <div class="col-lg-8 mb-4 offset-md-2">

     <div class="card-body">

      <h1>Recuperar Contraseña</h1>

      <p class="">¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña que le permitirá elegir una nueva.</p>
      <hr>
      <br>
      <br>

      <!-- Session Status -->
      {{--   <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
           {{--  <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

             <div class="form-group">
              <input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="JonDoe@gmail.com" value="">
              <!-- <div class="text-danger">></div> -->
              @if($errors->has('email'))
              <div class="text-danger" id="msg_email">{{ $errors->first('email') }}</div>
              @endif
            </div>
          </div>




          <div class="flex items-center justify-end mt-4">            

            <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>
            
          </div>
        </form>
      {{-- </x-guest-layout> --}}

    </div> {{-- end card --}}

  </div> {{-- end col --}}

</div> {{-- end row --}}

@include('inc/footer')

@endsection
