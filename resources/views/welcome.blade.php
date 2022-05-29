@extends('layouts.store')

@section('content')


@if(!file_exists(STORAGE_PATH('INSTALLED')))
       <div class="container vh-100 d-flex align-items-center justify-content-center  ">

       <div class="row">
                            <div class="col-12 mx-auto ">
                                <h5>{{ Str::ucfirst(__('Keep your purchase code handy for the next step!')) }}</h5>
                                <a href="{{url('/install')}}" class="btn btn-info btn-block rounded-pill text-light installBtnBG" ><i class="fas fa-laptop-code pr-2"></i> {{Str::upper(__('install'))}}</a>
                            </div>
                        </div>
       </div>

 @else


  <section id="home">

    <video controls="" autoplay="" muted="" loop="">
      <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
    </video>
    <div class="container">
      <div class="row pt-5">
        <div class=" home-text col-md-12 col-sm-12 mt-5">
          <h1>Carnivorous Magic</h1>
          <p class="lead">Somos una tienda virtual que se encarga de la venta y produccion de plantas carnvioras y productos para su cultivo.</p>
          <ul class="section-btn">
            <a href="{{url('/store')}}"> <span data-hover="Visita nuestra tienda">Visita nuestra tienda</span></a>
          </ul>
        </div>
      </div>
    </div>

    <div class="overlay"></div>
  </section>



  <section id="project" class="pb-5">
    <div class="container">
      <div class="row ">

        <div class="about-text text-center py-5 col-md-10 col-sm-12 mx-auto">
          <h3 class="pb-3">Nuestros servicios</h3>



        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card custom-card shadow-none">
            <img src="{{ asset('image/carnivorous-plant.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Plantas Carnivoras</h5>
              <p class="card-text">Ofrecemos gran variedad de plantas carnivoras</p>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card custom-card shadow-none">
            <img src="{{ asset('image/grano.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sustrato</h5>
              <p class="card-text">Contamos con sustrato apto para tus plantas carnivoras libre de
  carga nutricional</p>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card custom-card shadow-none">
            <img src="{{ asset('image/watering.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Consejos de cuidados</h5>
              <p class="card-text">Visita nuestra sección de cuidados para que tus plantas crescan de la mejor manera.</p>

            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-2">
          <div class="card custom-card shadow-none">
            <img src="{{ asset('image/plants.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pedidos personalizados</h5>
              <p class="card-text">Disfruta de nuestros arreglos personalizados contactanos para mas detalles!.</p>

            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-2">
          <div class="card custom-card shadow-none">
            <img src="{{ asset('image/gardener.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Doctor carnivorous</h5>
              <p class="card-text">TSi tienes problemas con tu planta carnivoras contactanos y trataremos de ayudarte a solucionarlo.</p>

            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-2">
          <div class="card custom-card shadow-none">
            <img src="{{ asset('image/gardening.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Otros productos</h5>
              <p class="card-text">Disfruta de nuestra sección de productos exclusivos.</p>

            </div>
          </div>
        </div>




      </div>
    </div>
  </section>


  <section id="team" class="h-100">
    <div class="container py-5">

      <div class="about-text text-center py-5 col-md-10 col-sm-12 mx-auto ">
        <h3 class="pb-3">Lista de productos</h3>
        <div class="carousel-banner">


      

            <div class="slider owl-carousel owl-theme">
        
            <div class="card product-card  zoom  mx-auto">
          
            <div class="card-img-block">
              <img class="card-img-top " src="{{ url('public/products/img_not_available.png') }}" alt="Card image cap">
              </div>



              <div class="card-body pt-0">
                <h5 class="card-title">nombre</h5>

                <div class="carousel-price">
                  <p class="last-price">Precio regular: <span>₡400</span></p>
                  <p class="new-price d-none">Precio en oferta: <span> ₡5000 (5%)</span></p>
                </div>
                <p class="card-text">wqfwqfwqf</p>
                <div class="purchase-info">

                  <a href="" type="button" class="btn btn-info"> Mas
                    detalles</a>
                                    <a href="" class="btn btn-sm btn-dark ml-2 disabled d-none" type="button">Agregar<i class="fas fa-cart-plus"></i></a>
                  <a  class="btn btn-sm btn-dark ml-2 disabled" type="button">Tamaño <span class="badge badge-pill badge-success">L</span> </a>
                </div>

              </div>



            </div>
            <!---- CONTENT -->
          

            </div>
        





      
        </div>


        <!-- first carousel-->
      </div>


    </div>




  </section>




  <section id="team" class="h-100">
    <div class="container py-5">

      <div class="about-text text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="pb-3">Productos exlusivos</h3>


        <div class="carousel-banner">


      

        <div class="slider owl-carousel owl-theme">
        
        <div class="card product-card  zoom  mx-auto">
        
        <div class="card-img-block">
          <img class="card-img-top " src="{{ url('public/products/img_not_available.png') }}" alt="Card image cap">
          </div>



          <div class="card-body pt-0">
            <h5 class="card-title">nombre</h5>

            <div class="carousel-price">
              <p class="last-price">Precio regular: <span>₡400</span></p>
              <p class="new-price d-none">Precio en oferta: <span> ₡5000 (5%)</span></p>
            </div>
            <p class="card-text">wqfwqfwqf</p>
            <div class="purchase-info">

              <a href="" type="button" class="btn btn-info"> Mas
                detalles</a>
                                <a href="" class="btn btn-sm btn-dark ml-2 disabled d-none" type="button">Agregar<i class="fas fa-cart-plus"></i></a>
              <a  class="btn btn-sm btn-dark ml-2 disabled" type="button">Tamaño <span class="badge badge-pill badge-success">L</span> </a>
            </div>

          </div>



        </div>
        <!---- CONTENT -->
      

        </div>
    


      
        </div>

        <!-- first carousel-->
      </div>


    </div>



  </section>



     @endif





@endsection