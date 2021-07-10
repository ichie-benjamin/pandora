@extends('auth.layout')

@section('content')
    <div class="page-title-area bg-8">
        <div class="container">
            <div class="page-title-content">
                <h2>Log In!</h2>
                <p>Welcome to {{ env('APP_NAME') }}, Login to proceed or click <a href="" style="color: green">REGISTER</a> to create account </p>
            </div>
        </div>
    </div>


    <section class="user-area-all-style log-in-area ptb-100">
        <div class="container">
            <div class="contact-form-action">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email Address">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control {{ $errors->has('password')?'is-invalid':'' }}" type="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 form-condition">
                            <div class="agree-label">
                                <input type="checkbox" id="chb1">
                                <label for="chb1">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <a class="forget" href="{{ url('/password/reset') }}">Forgot my password?</a>
                        </div>
                        <div class="col-12">
                            <button class="default-btn btn-two" type="submit">
                                Log In Now
                            </button>
                        </div>
                        <div class="col-12">
                            <p class="account-desc">
                                A new user?
                                <a href="{{ route('register') }}">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
