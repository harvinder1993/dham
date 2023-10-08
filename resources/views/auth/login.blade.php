@include('layouts.frontend.header')
<body>
  <div class="wrapper">
    <!-- Header html Start -->
    @include('layouts.frontend.navbar')
    <!-- Header html End -->
    <div class="authPage">
      <div class="autoForm box">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1 class="text-center">Login</h1>
          <div class="mb-3 mt-3 icon_input_email">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             
          </div>
          <div class="mb-3 icon_input_password">
              <label for="password" class="form-label">{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary loginBtn mt-4">
                {{ __('Login') }}
            </button>   
        </div>
       
        </form>
      </div>
    </div>
    @include('layouts.frontend.footer')
  </div>
  <script src="{{ asset('frontend/js/custom.js')}}"></script>
</body>

</html>