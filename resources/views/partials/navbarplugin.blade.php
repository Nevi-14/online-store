<header class="sticky-top">
  <div class="header bg ">

    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 col-lg-3 d-flex  align-items-center  text-white">
          <h2 class=" my-2 mx-auto " href="#">
          <img class="d-inline-block align-top"     src="{{asset('storage/adminfiles/companies/' . $logo)}}" alt="logo" height="50" width="50">
          <!-- <img src="{{ asset('image/nobgfinal.png') }}" width="50" height="50" class="d-inline-block align-top" alt="">-->
            <span class="ml-2 ">{{$company_name}}</span>
          </h2>
      
       
        </div>


        <div class="navbar col-12 col-lg-6  ">

          <ul class="d-flex list-unstyled nav-menu  my-2 mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item ml-2">
              <a class="nav-link" href="#products">Tienda</a>
            </li>
   
 

            <li class="nav-item ml-2 ">
              <a class="nav-link" href="#about">Contactanos</a>
            </li>
          </ul>
        </div>
   
        <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center my-2 ml-auto">

          <div class="btn-group my-2  mx-auto " role="group" aria-label="Basic example">

          @if (Auth::guest())
            <a href="{{url('/login')}}" class="btn btn-info btn-sm  ml-2 rounded-pill">Iniciar sessión</a>
            <a href="{{url('/client/login')}}" class="btn btn-secondary btn-sm ml-2 rounded-pill ">Cliente</a>
          @else
            <a href="{{url('/home')}}" class="btn btn-info btn-sm  ml-2 rounded-pill">Volver al sistema</a>
            <a class="btn btn-secondary btn-sm ml-2 rounded-pill" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Cerrar session') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        

          @endif
            @if (\Request::is('search') or  \Request::is('store'))  
            <button  class="btn btn-purple btn-sm  ml-2 rounded-pill" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-filter"></i></button>
@endif
       


            
          </div>


        </div>



      </div>
      <!--/row-->
    </div>
    <!--container-->



  </div>

</header>