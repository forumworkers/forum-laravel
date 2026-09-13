@extends('layouts/app')
@section('meta')

<title>{{ 'Login' }}</title> 

<link rel="canonical" href="https://foroworkers.com/login" />

<meta name="description" content="Login en foroworkers.com, ingresa en el portal de los webmasters">

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

      <h1 class="display-4">Ingresa</h1>
      <hr>
      <br>
      <br>

      <!-- Session Status -->
      {{--  <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

   

      <form method="POST" action="{{ route('login') }}">
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

          <!-- Password -->
          <div class="">


           <div class="form-group">
            <input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="Password ...." value="">
            @if($errors->has('password'))
            <div class="text-danger" id="msg_email">{{ $errors->first('password') }}</div>
            @endif
            <!-- <div class="text-danger">></div> -->
            <!-- <div class="text-danger" id="msg_email"></div> -->
          </div>
          {{--   <x-input-label for="password" :value="__('Password')" /> --}}

           {{--  <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" /> --}}

                            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                              <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                              </label>
                              @if (Route::has('password.request'))
                              <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                              </a>
                              @endif
                            </div>

                            <div class="flex items-center justify-end mt-4">
           {{--  @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif --}}

                {{--   <x-primary-button class="ml-3"> --}}
                  {{--   {{ __('Log in') }} --}}

                  <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>
                {{--  </x-primary-button> --}}
              </div>
            </form>
          {{-- </x-guest-layout> --}}

        </div> {{-- end card --}}

      </div> {{-- end col --}}

    </div> {{-- end row --}}

    @include('inc/footer')

    @endsection
