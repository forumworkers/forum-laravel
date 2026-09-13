@if(Auth::user())   
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
@endif

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <div class="navbar-header text-left">
    {{--   <a class="navbar-brand">OpenGisCRM</a> --}}
    <a class="navbar-brand" href="/">ForoWorkers</a>
    {{--   <a class="navbar-brand" href="/">ForoWorkers  {{$prueba}}</a> --}}
  </div>



  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">


   @if(Auth::user())   


   <!--    divider -->
   <div class="topbar-divider d-none d-sm-block"></div>

   <!-- Nav Item - Alerts -->
   <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <!-- Counter - Alerts -->
      {{--     <span class="badge badge-danger badge-counter">3+</span> --}}
      {{--     <span class="badge badge-danger badge-counter"></span> --}}
      {{-- <i class="fas fa-file-alt text-white"></i> --}}
    {{--   @if(!empty($replysnavbar))
     @if($sumreplys > 0) --}}
     <span class="badge badge-danger badge-counter" id="sumreplys">

      {{--  {{$sumreplys}} --}}
    </span>


   {{--   @endif

     @endif --}}
   </a>
   <!-- Dropdown - Alerts -->
   <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
    <h6 class="dropdown-header">
      Alerts Center
    </h6>
    {{--  @if(!empty($replysnavbar)) --}}



    {{--     @foreach($replysnavbar as $replynavbar) --}}
    {{--  <h4>{{ $message->message }}</h4> --}}
    {{--    @endforeach --}}
    {{--    @if(!empty($replysnavbar)) --}}
    {{--    @foreach($replysnavbar as $replynavbar) --}}
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="mr-3">
        <div class="icon-circle bg-primary">


        </div>
      </div>
      <div>
        {{-- <div class="small text-gray-500">December 12, 2019</div> --}}
        {{--   <div class="small text-gray-500">{!! $replynavbar->reply !!}</div> --}}


        {{--   <span class="font-weight-bold">A new monthly report is ready to download!</span> --}}
      </div>
    </a>
{{--     @endforeach
  @endif --}}


  <a class="dropdown-item text-center small text-gray-500" href="/replys">Mostrar todas las Alertas</a>
</div>
</li>

<!-- Nav Item - Messages -->
<li class="nav-item dropdown no-arrow mx-1">
  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-envelope fa-fw"></i>
    <!-- Counter - Messages -->
    {{--  <span class="badge badge-danger badge-counter">7</span> --}}
    {{--   @if(!empty($messagesnavbar)) --}}
    {{--   @foreach($messagesnavbar as $messagenavbar) --}}
    {{--  <span class="badge badge-danger badge-counter"> --}}
      {{--    @if($summessages > 0) --}}
      <span class="badge badge-danger badge-counter" id="summessages">

        {{--  {{$summessages}} --}}
      </span>


      {{--  @else --}}

      {{-- @endif --}}

    {{--  </span> --}}




    {{--    @if(!empty($messagesnavbar)) --}}
    {{--   @foreach($messagesnavbar as $messagenavbar) --}}

    {{-- {{count((array)$messagesnavbar[0]->message )}} --}}
    {{-- @endforeach --}}
    {{--  @endif --}}
  {{--   </span> --}}
  {{--  @endforeach --}}
  {{-- @endif  --}}
</a>
<!-- Dropdown - Messages -->
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
   {{--  <h6 class="dropdown-header">
      Message Center
    </h6> --}}
    <h6 class="dropdown-header">
      Centro de Mensajes
    </h6>

    {{--   @if(!empty($messagesnavbar)) --}}

    {{--   @foreach($messagesnavbar as $messagenavbar) --}}

    <div id="messagesnavbar">

      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="" alt="">
          <div class="status-indicator bg-success"></div>
        </div>
        <div class="font-weight-bold">
          {{-- <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div> --}}
          {{-- <div class="text-truncate">{{ $messagenavbar->message }}</div> --}}
          {{--  <div class="text-truncate">{{ print_r($messagenavbar->message) }}</div> --}}
          {{--   <div class="text-truncate">{!! $messagenavbar->message !!}</div> --}}
          {{-- <div class="small text-gray-500">Emily Fowler · 58m</div> --}}
        </div>
      </a>

    </div>

  {{--   @endforeach
    @endif --}}


    <a class="dropdown-item text-center small text-gray-500" href="/conversations">Leer todos los Mensajes</a>
  </div>
</li>

<!--    divider -->
<div class="topbar-divider d-none d-sm-block"></div>



<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
      <!-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lenguaje</span>       
      </a> -->

      <!-- Dropdown - dropdown -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="">
          <i class="fas fa-globe-americas fa-sm fa-fw mr-2 text-gray-400"></i>
          
        </a>
        <a class="dropdown-item" href="">
          <i class="fas fa-flag-usa fa-sm fa-fw mr-2 text-gray-400"></i>
          
        </a>

      </div>    
    </li>



    <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> </span>
        <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/iFgRcqHznqg"> -->

        <img class="img-profile rounded-circle" src=""> 
        {{ Auth::user()->username }}       
      </a>

      <!-- Dropdown - dropdown -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{ route('settings') }}">
          <i class="fas fa-fw fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>          
          {{-- Perfil: {{ Auth::user()->username }} --}}
          Settings
        </a>        
        <a class="dropdown-item" href="{{ route('logout') }}">
          <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>

          Cerrar Session
        </a>          

      </div>     
    </li>

    @else

    <li class="nav-item">
      <a class="nav-link" href="/cursos">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cursos</span>             
      </a>

    </li>

    <li class="nav-item">
      <a class="nav-link" href="/reglas">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Reglas</span>             
      </a>

    </li>

    <li class="nav-item">
      <a class="nav-link" href="/guest-post">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guest Post</span>             
      </a>

    </li>

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


@if(Auth::user())

<script type="text/javascript">





  $.ajax({
    url: 'http://127.0.0.1:8000'+'/msgfront',   
    dataType: 'json'    
  })
  .done(function(result) {

    // console.log(result);
      // console.log(result.messagesnavbar);

    // $("#messagesnavbar").append('<a class="dropdown-item d-flex align-items-center" href="#">'+
    //   '<div class="mr-3">'+
    //     '<div class="icon-circle bg-primary">'+
    //      '</div>'+
    //   '</div>'
    //     );

    //  $.each(result, function(index, val) {

    //    console.log(val[0].message);


    // $("#messagesnavbar").append(`<a class="dropdown-item d-flex align-items-center" href="#">
    //   <div class="dropdown-list-image mr-3">
    //   <img class="rounded-circle" src="" alt="">
    //   <div class="status-indicator bg-success"></div>
    //   </div>
    //   <div class="font-weight-bold">
    //   <div class="text-truncate"> ${val}</div>
    //   </div>
    //   </a>`
    //   );

    // });


    // $("#replys").append();
    // $("#replysnavbar").append();

    if(result.summessages > 0){
      $("#summessages").html(result.summessages);
    }else{
     $("#summessages").remove();
   }

   if(result.sumreplys > 0){
    $("#sumreplys").html(result.sumreplys);
  }else{
    $("#sumreplys").remove();
  }

    // $("#summessages").html(result.summessages);
    // $("#sumreplys").html(result.sumreplys);




  });




</script>

@endif
