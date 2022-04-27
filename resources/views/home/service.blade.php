@extends('layouts.main')



@section('content')


<section id="services">
  <div class="container py-5">
    <div class="row py-5 my-5">
      <div class="text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="text-title">Nuestros servicios</h3>
      </div>
      
<div class="col-12">

<p>{{@$company_name->field_value}}  <p>
</div>
    </div>
  </div>
</section>

<section id="services_more">
  <div class="container py-5">
    <div class="row py-5 my-5">
      <div class="text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="text-title">WHOLESALING NEARSHORE SOLUTIONS</h3>
      </div>
      



@foreach($products as $product)

<div class="col-12 col-md-4">
<div class="card" >
  <img src="https://images.unsplash.com/photo-1623912804996-0eff1b8723b7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->long_description}}</p>
  </div>

  <div class="card-body">
  <span class="badge badge-pill badge-info">Precio : {{$product->price}}</span>
  <span class="badge badge-pill badge-primary">Descuento : {{$product->discount}}</span>

  </div>
</div>

</div>
@endforeach

    <div class="col-12 col-md-4  mb-3">

    

    <div class="card border-0 card-info mx-auto" >

      <img class="rounded-circle" src="{{asset('images/listing.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">

        <h5 class="card-title">Listing agreement booster</h5>

        <p class="card-text">Aggressive platform to increase the realtor’s property listing portfolio and sales. Prospect Generation and closing.</p>

    

      </div>

    </div>

    

    </div>

    <div class="col-12 col-md-4  mb-3">

    

    <div class="card border-0 card-info mx-auto" >

      <img class="rounded-circle" src="{{asset('images/RE.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">

        <h5 class="card-title">RE Investors platform </h5>

        <p class="card-text">We offer a successful and proven platform, to boost the purchase of properties through marketing and sales funnels. Prospecting, CPAs, After Repair Value.</p>

    

      </div>

    </div>

    

    </div>

    <div class="col-12 col-md-4  mb-3">

    

    <div class="card border-0 card-info mx-auto" >

      <img class="rounded-circle" src="{{asset('images/REM.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">

        <h5 class="card-title">Real estate marketing services </h5>

        <p class="card-text">Branding | WEB development | Digital Marketing.</p>

    

      </div>

    </div>

    

    </div>

    </div>
  </div>
</section>

<section id="book_able">
  <div class="container py-5">
    <div class="row py-5 my-5">
      <div class="text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="text-title">Outsourcing Brokerage Services</h3>
      </div>
      

      <div class="col-12 col-md-4  mb-3">

    

<div class="card border-0 service-img mx-auto"style="width: 18rem;" >

  <img class="w-100" src="{{asset('images/RH.jpg')}}" class="card-img-top" alt="...">

  <div class="card-body">

    <h5 class="card-title">Human Resources $25 / hour</h5>

    <p class="card-text">Recruitment and Interviewing services. You can rely on our selection of personnel, hiring, recruitment, and legal support.</p>



  </div>

</div>



</div>

<div class="col-12 col-md-4  mb-3">



<div class="card border-0 service-img mx-auto"style="width: 18rem;" >

  <img class="w-100" src="{{asset('images/training.jpg')}}" class="card-img-top" alt="...">

  <div class="card-body">

    <h5 class="card-title">Training $25 / hour</h5>

    <p class="card-text">We believe in Motivation, not subordination. Our practical training plus the "we culture" and "just do it methodology", allow our trainees to learn fast and appropriate. Tackling the issue and not the individual.</p>



  </div>

</div>



</div>

<div class="col-12 col-md-4  mb-3">



  

<div class="card service-img border-0 mx-auto"style="width: 18rem;" >

  <img class="w-100" src="{{asset('images/QA.jpg')}}" class="card-img-top" alt="...">

  <div class="card-body">

    <h5 class="card-title">Quality Assurance $25 / hour</h5>

    <p class="card-text">We provide our agents with quality assurance insights and tweaks they can apply to their interactions with prospects. Coaching and progress weekly follow-ups.</p>



  </div>

</div>



</div>

    </div>
  </div>
</section>



<section id="Partners">
  <div class="container py-5">
    <div class="row py-5 my-5">
      <div class="text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="text-title">Our Partners</h3>
      </div>
      
<div class="col-12 col-md-6 d-flex justify-content-center">
<img class="partner-2" src="{{asset('images/awol.png')}}" alt="" style="height:100px">


</div>
<div class="col-12 col-md-6 d-flex justify-content-center">
<img   class="partner" src="{{asset('images/nomadux.png')}}" alt=""  style="height:100px">
</div>
  </div>
</section>

<section id="appointment">
  <div class="container py-5">
    <div class="row py-5 my-5">
      <div class="text-center py-5 col-md-10 col-sm-12 mx-auto">
        <h3 class="text-title">Book and appointment</h3>
      </div>
      <div class="col-12 col-md-4  mb-3" mx-auto>

    

      <div class="card  border-0 mx-auto " style="width:18rem; height:400px;" >


  <img  src="{{asset('images/housethumb.png')}}" class="card-img-top mx-auto" style="width:200px;height:200px">

  <div class="card-body mt-4">

    <h6 class="card-title">INVESTORS PLATFORM</h6>

    <p>1 h | $18</p>


<div class="d-flex justify-content-center">
<a href="#" class="btn btn-secondary rounded-pill ">Book now</a>
</div>

  </div>

</div>



</div>

<div class="col-12 col-md-4  mb-3">



<div class="card border-0 mx-auto  "style="width: 18rem; height:400px;" >

  <img src="{{asset('images/hands.png')}}"  class="card-img-top mx-auto" style="width:200px;height:200px">

  <div class="card-body mt-4">

    <h6 class="card-title ">LISTING AGREEMENT BOOSTER</h6>

    <p>1 h | $18</p>


    <div class="d-flex justify-content-center">
<a href="#" class="btn btn-secondary rounded-pill ">Book now</a>
</div>


  </div>

</div>



</div>

<div class="col-12 col-md-4  mb-3">



<div class="card border-0 mx-auto  "style="width: 18rem; height:400px;" >
  <img src="{{asset('images/increase.png')}}" class="card-img-top mx-auto" style="width:200px;height:200px">

  <div class="card-body mt-4">

    <h6 class="card-title">BRANDING  | MARKETING</h6>

    <p>  <p>1 h | from $900</p></p>

    <div class="d-flex justify-content-center">
<a href="#" class="btn btn-secondary rounded-pill ">Book now</a>
</div>


  </div>

</div>



</div>
    </div>
  </div>
</section>





    

    

    









@endsection



@push('scripts')







@endpush