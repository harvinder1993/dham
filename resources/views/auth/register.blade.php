@include('layouts.frontend.header')
<body>
  <div class="wrapper">
    <!-- Header html Start -->
    @include('layouts.frontend.navbar')
    <!-- Header html End -->
    <div class="authPage register">
        <div class="autoForm box">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-center">Signup</h1>
            <div class="mb-3 mt-3 icon_input">
            <label for="name" class="form-label">Name:</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="mb-3 mt-3 icon_input_email">
            <label for="email" class="form-label">Email:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="mb-3 icon_input_password">
            <label for="pwd" class="form-label">Create Password:</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="mb-3 icon_input_password">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary loginBtn mt-4">Signup</button>
            <p class="mt-2">Do you have an Account? <a href="{{ route('login')}}">Login</a></p>
        </form>
        </div>
    </div>

    @include('layouts.frontend.footer')
  </div>
  <script src="{{ asset('frontend/js/custom.js')}}"></script>
</body>

</html>