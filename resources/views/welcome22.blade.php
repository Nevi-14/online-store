@extends('layouts.main')



@section('content')


<section id="home" class="">
 
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center text-center text-white">
  <div class="container">
    <h1 class="display-6">Soluciones Tecnologicas  Para Tu Negocio</h1>
    <p class="text-white my-5  text-bold">Contactanos y te ayudamos a escoger un plan que se ajuste a su presupuesto
    Y disfruta de la nueva era tecnologica</p>
  </div>
  <div class="message-header">
Call now! +1 (609)549-8014
</div>
</div>
        </div>
    </div>
</div>


</section>



<section id="about">
    <div class="container py-5">
        <div class="row py-5 my-5">
            <div class=" text-center py-5 col-md-10 col-sm-12 mx-auto">
                <h3 class="text-title">About PropertyBookers</h3>

                <p class="lead">
                Welcome, to give you a brief description of who we are and what we do: We are a group of professionals that are passionate about Real Estate. With more than 15 years in customer satisfaction, sales, marketing, and real estate, we joined together in this venture and built a successful proven based plattform. We found a gap in the process between lead generation, cold calling and appointment setting; and as a result, we understood the market needs. Prospecting, after repair value, maximum cash offer, comparables, and CPA factors are part of the successful formula to generate Prospects, that can be closed by our clients; who are typically Realtors, Wholesalers and Realestate Investors that earn a living in the USA and Canada real estate markets. We are an outsourcing company based in Costa Rica and linked to one of the biggest US wholesaling networks. Contact us and start obtaining results in less time.
                </p>
            </div>

            
        </div>
    </div>



</section>


<!-- FORM SECTION -->

@include('home.contactform')


















@endsection



@push('scripts')







@endpush