@extends('layouts.auth')

@section('content')

 <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-dark" src="{{ config('app.url') }}/assets/images/logo.png" alt="looginpage"><img class="img-fluid for-light" src="{{ config('app.url') }}/assets/images/logo.png" alt="looginpage"></a></div>
              <div class="login-main">
                <form method="POST" class="theme-form" action="{{ route('login') }}">
                        @csrf
                  <h4>Sign in to account </h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password </label>
                    <div class="form-input position-relative">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">



                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group mb-0">

                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
