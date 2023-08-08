<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body class="inner_page login">
    <div class="full_container">
        <div class="container">
        <div class="center verticle_center full_height">
            <div class="login_section">
                <div class="logo_login">
                    <div class="center">
                    <img width="210" src="{{ asset('AD') }}/images/logo/cbc.jpg" alt="#" />
                    </div>
                </div>
                <div class="login_form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>

                        <div class="field">
                            <label class="label_field">Email Address</label>
                            <input type="email" class="@error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label_field">Password</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                        </div>
                        @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        <div class="field margin_0 justify-content-center">
                            <button type="submit" class="main_bt bg-warning ml-xl-5">Se connecter</button>
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    @include('layouts.js')
</body>
</html>
