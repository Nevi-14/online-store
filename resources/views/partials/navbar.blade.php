<div class="navbar-container">

 <!-- STARTS NAVBAR  -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <nav id="new-top" class="navbar  navbar-expand-lg  pl-0 flex-nowrap w-100 navbar-new-top">

           <span class="center-main p-0 order-0  d-none d-md-block order-lg-1">PROPERTYBOOKERS</span>

            <div class="logo-container  order-1 order-lg-0">   <img id="nav-logo" class="zoom"

                src="https://drive.google.com/thumbnail?id=1hyJtix697a1KETKZvcp9f0E0zrJfZSyN"

                class="d-inline-block align-top" alt="" loading="lazy">
            
            
            </div>

            <ul class="navbar-nav flex-row order-2 order-md-1 ">

     @switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch

            @if (Route::has('login'))

                    @auth

                    <li class="nav-item mr-2">

                    <a href="{{ url('/home') }}" class="nav-link header-btn text-white text-center"><i class="fas fa-angle-double-right mr-1"></i>System</a>

                </li>



                    @else

                <li class="nav-item mr-2">

                    <a href="{{ url('/login') }}" class="nav-link header-btn text-white text-center"><i class="fas fa-user mr-1"></i>User login</a>

                </li>

                <li class="nav-item">

                    <a href="{{ url('client/login') }}" class="nav-link header-btn-2  text-white text-center"><i class="fas fa-user-tie mr-1"></i>Client login</a>

                </li>

                @endauth

                @endif

            </ul>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">

                <span class="navbar-toggler-icon"></span>

            </button>

        </nav>

       

        <nav class="navbar  navbar-expand navbar-new-bottom">

            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">



                <ul class="navbar-nav w-100 justify-content-center px-3">



                

                  

                @if (request()->is('/'))

                    <li class="nav-item ">

                        <a class="nav-link active " href="{{ url('/') }}">HOME <span

                                class="sr-only">(current)</span></a>

                    </li>

                    @else

                    <li class="nav-item ">

                        <a class="nav-link  " href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>

                    </li>



                    @endif





                    @if (request()->is('services'))

                    <li class="nav-item">

                        <a class="nav-link active" href="{{ url('services') }}">SERVICES</a>

                    </li>

                    @else

                    <li class="nav-item">

                        <a class="nav-link " href="{{ url('services') }}">SERVICES</a>

                    </li>

                    @endif





                    @if (request()->is('about'))



                    <li class="nav-item">

                        <a class="nav-link active" href="{{ url('about') }}">ABOUT US</a>

                    </li>





                    @else





                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>

                    </li>

                    @endif





                    @if (request()->is('rates'))

                    <li class="nav-item ">

                        <a class="nav-link active" href="{{ url('rates') }}">RATES <span

                                class="sr-only">(current)</span></a>

                    </li>

                    @else

                    <li class="nav-item ">

                        <a class="nav-link" href="{{ url('rates') }}">RATES <span class="sr-only">(current)</span></a>

                    </li>

                    @endif





                    @if (request()->is('contact'))





                    <li class="nav-item">

                        <a class="nav-link active" href="{{ url('contact') }}">CONTACT</a>

                    </li>

                    @else





                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('contact') }}">CONTACT</a>

                    </li>

                    @endif





                </ul>

            </div>

        </nav>





        <!-- ENDS NAVBAR -->


</div>



