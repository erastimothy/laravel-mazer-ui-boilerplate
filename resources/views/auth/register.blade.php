@extends('layouts.app')

@section('title','Register')
@section('subtitle','Input your data to register to our website.')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="name" type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password-confirm" type="password" class="form-control-xl form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('Register') }}</button>
    
</form>
<div class="text-center mt-5 text-lg fs-4">
    <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}" class="font-bold">{{ __('Login') }}</a>.</p>
</div>
@endsection
