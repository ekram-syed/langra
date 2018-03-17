@extends('layouts.frontend') @section('content')
<section>
    <div class="container mt-4">
        <h1 class="h4 border-bottom mb-4 mb-4 pb-4">
            <i class="fas fa-sign-in-alt"></i> {{ __('Reset Password') }}
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="lead">{{ __('Enter your email to get instructions') }}</h3>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>
                        <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-block btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection