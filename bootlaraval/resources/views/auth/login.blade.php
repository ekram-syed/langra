@extends('layouts.frontend') @section('content')
<section id="signin">
    <div class="container mt-4">
        <h1 class="h4 border-bottom mb-4 mb-4 pb-4">
            <i class="fas fa-sign-in-alt"></i> Signin
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h3 class="lead">Quick & Easy</h3>
                <button class="btn  btn-outline-secondary btn-block text-left" type="submit">
                    <i class="fab fa-fw fa-google-plus-square"></i> SignIn with Google</button>
                <button class="btn btn-outline-secondary btn-block  text-left" type="submit">
                    <i class="fab fa-fw fa-facebook-square"></i> SignIn with Facebook</button>
                <button class="btn  btn-outline-secondary btn-block  text-left" type="submit">
                    <i class="fab fa-fw fa-linkedin"></i> SignIn with Linkedin</button>
            </div>

            <div class="col-md-6">
                <h3 class="lead">Use Email & Password</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email" class="sr-only">{{__('Email address')}}</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            required autofocus> @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="password" class="sr-only">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required> @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            <i class="fas fa-thumbtack"></i>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>

            <div class="col-md-3">
                <h3 class="lead">First time here? SignUp</h3>
                <a href="/register" class="btn  btn-outline-success btn-block">
                    <i class="fas fa-user-plus"></i> SignUp</a>
                <hr>
                <h3 class="lead">Forget credentials?</h3>
                <a class="btn btn-outline-dark btn-block" href="{{ route('password.request') }}">
                    <i class="fas fa-retweet"></i> {{ __('Forgot Your Password?') }}
                </a>
            </div>

        </div>
</section>
@endsection