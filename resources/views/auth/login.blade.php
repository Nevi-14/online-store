@extends('layouts.login')



@section('content')

<section id="services"  >
<div class="container">
    <div class="row" style="margin-top: 4rem;">

      
<div class="col-12 col-md-4 mx-auto">
<div class="card shadow-lg card-login" >

<div class="card-header bg-transparent border-0 text-center text-info"><i class="fas fa-user fa-3x mb-2 user-icon "> </i><p>USER LOGIN</p></div>



<div class="card-body">

    <form method="POST" action="{{ route('login') }}">

        @csrf



        <div class="form-group">

            <label for="email" class="text-md-right">{{ __('auth.email_address') }}</label>



                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>



                @error('email')

                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

        </div>



        <label for="password" class="text-md-right">{{ __('auth.password') }}</label>

        <div class="input-group ">

            <input type="password" id="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            <span class="input-group-append">

                <i class=" btn btn-info text-light btn-sm pt-2 fas fa-eye" id="show_password"></i>

                <i class="btn btn-secondary btn-sm pt-2 fas fa-eye-slash  d-hide" id="hide_password"></i>

                </span>

            @error('password')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

        </div>

    

        <div class="form-group">

            <div class="form-check">

                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>



                <label class="form-check-label" for="remember">

                    {{ __('auth.remember') }}

                </label>

            </div>

        </div>



        <div class="form-group  mb-0">

        <button type="submit" class="btn btn-primary my-2 rounded-pill">

                {{ __('auth.login') }}

            </button>



            @if (Route::has('password.request'))

                <a class="btn btn-link" href="{{ route('password.request') }}">

                    {{ __('auth.forgot_password') }}

                </a>

            @endif

        </div>

    </form>

</div>

</div>
</div>
    </div>
  </div>
</section>








@endsection



@push('scripts')







@endpush



