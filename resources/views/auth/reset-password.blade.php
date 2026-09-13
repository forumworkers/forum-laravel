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

				<h1 class="display-4">Ingrese una nueva Contraseña</h1>
				<hr>
				<br>
				<br>

				<form method="POST" action="{{ route('password.store') }}">
					@csrf

					<!-- Password Reset Token -->
					<input type="hidden" name="token" value="{{ $request->route('token') }}">

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



                            <div class="flex items-center justify-end mt-4">


                            	<button type="submit" class="btn btn-primary btn-user btn-block">Send</button>
                            {{--  </x-primary-button> --}}
                        </div>
                    </form>
                {{-- </x-guest-layout> --}}

            </div> {{-- end card --}}

        </div> {{-- end col --}}

    </div> {{-- end row --}}

    @endsection
