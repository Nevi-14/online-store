
    
    <footer class="py-5">
  <div class="container py-5">
    <div class="row">
    <div class="col-12">
        <div class="footer-info">
         <h2>Terminos y condiciones</h2>
         <p>{{@$company_terms}}</p>
 
        </div>
               </div>

               <div class="col-md-3 col-sm-12">
        <div class="footer-info">
         <h2>Sobre nosotros</h2>
         <p>{{@$company_about}}</p>
 
        </div>
               </div>
      <div class="col-md-4 col-sm-6">
       <div class="footer-info">
        <h2>Contactanos</h2>
        <p><a href="#"></a><i class="fas fa-mobile-alt mr-2"></i> Tel: {{@$company_phone}}</p>
        <p><a href="#"></a><i class="fas fa-envelope mr-2"></i>Correo: {{$company_email}}</p>
        
        <p><a href="#"></a><i class="fas fa-map-marker-alt mr-2"></i>Ubicacion:<address>{{@$company_address}}, {{@$company_city}},   {{@$company_country}}.</address></p>

       </div>
              </div>

             
            <div class="col-md-5 col-sm-12">
                <div class="footer-info">
                    <h2>Horario de atención</h2>
                    <ul class="list-unstyled business-hours" >

                        <li><a href="#" class="text-dark">Lunes : 08:00 AM - 5:00 PM </a></li>
                        <li><a href="#" class="text-dark">Martes : 08:00 AM - 5:00 PM </a></li>
                        <li><a href="#" class="text-dark">Miercoles : 08:00 AM - 5:00 PM </a></li>
                        <li><a href="#" class="text-dark">Jueves : 08:00 AM - 5:00 PM </a></li>
                        <li><a href="#" class="text-dark">Viernes : 08:00 AM - 5:00 PM </a></li>
                        <li><a href="#" class="text-dark">Sabado : Cerrado </a></li>
                        <li><a href="#" class="text-dark">Domingo : Cerrado </a></li>


                    </ul>

                </div>



            </div> 
 

               
        <div class="col-md-12 col-12 text-center">
          <p>Copyright &copy; {{ now()->year }}  {{@$company_name}} | Designed by:  <a href="mailto:workemailnelson@gmail.com" >Nelson Morera Fernández</a></p>
        </div>

    </div>
  </div>
</footer>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.css">
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js">
</script>
<script>
$('.slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    lazyLoad: true,
    responsive: {
        0: {
            items: 1
        },
        700: {
            items: 2
        },
       900: {
            items: 3
        },
        1400: {
            items: 3
        }
    }
})


$('#owl-carousel-video').owlCarousel({
    items: 1,
    merge: false,
    merge: true,
    loop: true,
    margin: 10,
    nav: true,
    video: true,
    lazyLoad: true,
    center: true,
    responsive: {
        480: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})
</script>
   <script>
      $(window).scroll(function(){

$('header').toggleClass('scrolled',$(this).scrollTop() > 1)

      })
    </script>
    <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      centeredSlides:true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>