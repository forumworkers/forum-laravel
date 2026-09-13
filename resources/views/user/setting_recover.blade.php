@extends('layouts/app')
{{-- @section('title','Login') --}}
@section('meta')

<title>{{ 'Recuperar Password' }}</title> 

{{-- <link rel="canonical" href="https://foroworkers.com/forgot-password" /> --}}

<meta name="description" content="Recuperar nuestra contraseña en foroworkers.com">

@endsection

@section('content')
@include('inc/navbar')

{{-- <x-guest-layout> --}}
  <!-- Session Status -->
  {{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

  <div class="row">

    <div class="col-lg-8 mb-4 offset-md-2">

     <div class="card-body bg-white">

      <h1>Recuperar Contraseña</h1>

      <p class="">¿Necesitas cambiar tu contraseña? Ningún problema. Simplemente agrege su nueva contraseña.</p>
      <hr>
      <br>
      <br>

      <!-- Session Status -->
      {{--   <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

      <form method="POST" action="{{ route('setting.change') }}">
        @csrf

        <!-- Email Address -->
        <div>
           {{--  <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

             <div class="form-group">
              <input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="ejem:password123" value="">
              <!-- <div class="text-danger">></div> -->
              @if($errors->has('password'))
              <div class="text-danger" id="msg_password">{{ $errors->first('password') }}</div>
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

@endsection
