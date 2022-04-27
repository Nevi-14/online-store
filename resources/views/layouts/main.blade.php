@include('partials.header')





<!-- STARTS MAIN CONTAINER -->

<div id="content-wrap" class="container-fluid p-0 m-0">



    @yield('content')



    @include('partials.contact')

  



</div>



<!-- STARTS FOOTER -->


@include('partials.footerplugin')




@include('partials.footer')