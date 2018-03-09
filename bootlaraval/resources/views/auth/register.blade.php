@extends('layouts.frontend') @section('content')

<section id="signup">
    <div class="container  mt-4">
        <h1 class="h4 border-bottom mb-4 pb-4">
            <i class="fas fa-user-plus"></i> {{ __('Signup') }}
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="lead">{{ __('Quick & Easy') }}</h3>
                <button class="btn  btn-outline-primary btn-block text-left" type="submit">
                    <i class="fab fa-google-plus-square"></i> SignUn with Google</button>
                <button class="btn  btn-outline-primary btn-block  text-left" type="submit">
                    <i class="fab fa-facebook-square"></i> SignUn with Facebook</button>
                <button class="btn  btn-outline-primary btn-block  text-left" type="submit">
                    <i class="fab fa-linkedin"></i> SignUn with Linkedin</button>
            </div>

            <div class="col-md-4">
                <h3 class="lead">{{ __('Use our Register') }}</h3>
                <form class="form-signin" method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="name" class="sr-only">{{ __('Name') }}</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <input id="name" placeholder="{{__('Name')}}" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="email" class="sr-only">{{ __('E-Mail') }}</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>
                        <input id="email" type="email" placeholder="{{__('Email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" required> @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="password_confirmation" class="sr-only">{{ __('Confirm Password') }}</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control" name="password_confirmation"
                            required>
                    </div>


                    <p class="text-muted">
                        {{ __('By Signing up you agree to our ') }}
                        <a href="#">{{__('Terms of service')}}</a>
                    </p>
                    <button class="btn  btn-primary btn-block" type="submit">{{ __('Register') }}</button>
                </form>
            </div>

            <div class="col-md-4">
                <h3 class="lead">{{ __('Returning User? Just SignIn') }}</h3>
                <button class="btn  btn-outline-primary btn-block" type="submit">
                    <i class="fas fa-sign-in-alt"></i> {{ __('Signin') }}</button>
                <hr>
                <h3 class="lead">{{ __('Forget credentials?') }}</h3>
                <button class="btn  btn-outline-dark btn-block" type="submit">
                    <i class="fas fa-retweet"></i> {{ __('Request & Reset') }}</button>
            </div>

        </div>
</section>
@endsection