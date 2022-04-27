@include('partials.navbar_new')

@if (Request::path() !== 'login' && Request::path() !== 'register'  && Request::path() !== 'store/' )

@endif


@yield('content')
@include('partials.filter')
@include('partials.footer_new')
@stack('scripts')
