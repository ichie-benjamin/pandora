@extends('auth.layout')

@section('content')
    <div class="page-title-area bg-8">
        <div class="container">
            <div class="page-title-content">
                <h2>CREATE ACCOUNT</h2>
                <p>Welcome to {{ env('APP_NAME') }}, Fill the form below to create your account </p>
            </div>
        </div>
    </div>


    <section class="user-area-all-style log-in-area ptb-100">
        <div class="container">
            <div class="contact-form-action">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="first_name" placeholder="First Name">
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="text" required name="email" placeholder="Email Address">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" required type="text" name="phone" placeholder="Phone Number">
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control {{ $errors->has('password_confirmation')?'is-invalid':'' }}" type="password" name="password_confirmation" placeholder="Confirm Password">
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>User Type (Pls select if you are a voter or a chef)</label>
                                <select class="form-control" name="type" required>
                                    <option disabled>Select</option>
                                    <option value="user">Voter</option>
                                    <option value="chef">Chef</option>
                                </select>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn btn-two" type="submit">
                                Register
                            </button>
                        </div>
                        <div class="col-12">
                            <p class="account-desc">
                                Already have an account?
                                <a href="{{ route('login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
