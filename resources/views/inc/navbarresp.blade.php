<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <div class="navbar-header text-left">
    <a class="navbar-brand" href="/">Foro Master Demo</a>
  </div>



  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

   <!-- Nav Item - User Information -->
   {{-- <li class="nav-item">
    <a class="nav-link" href="/login">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Acceder</span>             
    </a>

  </li>

  <li class="nav-item">
    <a class="nav-link" href="/register">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Registro</span>             
    </a>

  </li> --}}

  @if(Auth::user())   
  <li class="nav-item">
    <a class="nav-link" href="">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->username }}</span>             
    </a>

  </li>

  <li class="nav-item">
    <a class="nav-link" href="/conversations">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mensajes</span>             
    </a>

  </li>

  <li class="nav-item">
{{-- 
   <form method="POST" action="{{ route('logout') }}">
    @csrf --}}
    <a class="nav-link" href="{{ route('logout') }}">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cerrar Session</span>             
    </a>

 {{--  </form> --}}

</li>

@else

<li class="nav-item">
  <a class="nav-link" href="/login">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Acceder</span>             
  </a>

</li>

<li class="nav-item">
  <a class="nav-link" href="/register">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Registro</span>             
  </a>

</li>

@endif


</ul>


</nav>
