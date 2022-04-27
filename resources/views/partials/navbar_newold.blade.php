<header>

<nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white">
<div class="container-fluid">
<a class="navbar-brand d-flex align-items-center " href="#">
                <img src="{{asset('images/code.png')}}" width="50" height="50"  alt="">
                <span class="brand-title  ml-2 ">
              <img src="{{asset('/storage/companypics//'.$logo)}}" alt="img">
                </span>
            </a>


            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-dark"></i>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto mt-1">

      <li class="nav-item">
        <a class="nav-link ml-3" href="{{url('/')}}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="{{url('services')}}">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="{{url('about')}}">Sobre Nosotros</a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto mt-1  d-none d-md-flex">

    @guest
<li class="nav-item">
  <a class="btn btn-sm  btn-info rounded-pill" href="{{url('login')}}">User login</a>
</li>
<li class="nav-item ml-2">
  <a class="btn btn-sm  btn-secondary rounded-pill" href="{{url('client/login')}}">Client login</a>
</li>
   
@else 

<li class="nav-item">
  <a class="btn btn-sm  btn-info rounded-pill" href="{{url('home')}}">System</a>
</li>
<li class="nav-item ml-2">
  <a class="btn btn-sm  btn-secondary rounded-pill" href="{{ route('logout') }}"

onclick="event.preventDefault();

              document.getElementById('logout-form').submit();">Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-hide">

@csrf

</form>
</li>
@endguest
</ul>


  </div>
  <ul class="list-unstyled ml-auto mt-1 order-first d-flex d-md-none justify-content-center  w-100 order-lg-1">

     

  @guest
<li class="nav-item">
  <a class="btn btn-sm  btn-info rounded-pill" href="{{url('login')}}">User login</a>
</li>
<li class="nav-item ml-2">
  <a class="btn btn-sm  btn-secondary rounded-pill" href="{{url('client/login')}}">Client login</a>
</li>
   
@else 

<li class="nav-item">
  <a class="btn btn-sm  btn-info rounded-pill" href="{{url('home')}}">System</a>
</li>
<li class="nav-item ml-2">
  <a class="btn btn-sm  btn-secondary rounded-pill" href="{{ route('logout') }}"

onclick="event.preventDefault();

              document.getElementById('logout-form').submit();">Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-hide">

@csrf

</form>
</li>
@endguest
</ul>

</div>
</nav>

</header>