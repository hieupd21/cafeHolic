@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row vh-100">
        <div class="col-md-4 col-6 bg-dark m-auto py-5">
            <h1 class="text-center text-only font-weight-bold mb-3">LOGIN</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="text-uppercase text-only font-weight-bold">
                        Email
                    </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="text-uppercase text-only font-weight-bold">
                        Password
                    </label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label text-white" for="remember">
                        Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-lightpurple btn-block font-weight-bold text-uppercase">
                    Login
                </button>
            </form>
            @if (Route::has('password.request'))
            <div class="m-0 mt-2 text-center">
                <a class="btn btn-link text-decoration-none text-uppercase text-lightpurple font-weight-bold" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
            
            @endif
            <p class="m-0 mt-2 text-center">
                <a class="text-uppercase text-lightpurple text-decoration-none font-weight-bold"
                    href="{{route('home')}}">
                    Back
                </a>
            </p>
        </div>
    </div>
</div>
@endsection