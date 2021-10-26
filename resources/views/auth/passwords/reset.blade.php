@extends('layouts.app')

@section('title','Forgot Password')
@section('subtitle','Input your email and we will send you reset password link.')

@section('content')
<form action="index.html">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email" placeholder="Email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
        {{ __('Reset Password') }}
    </button>
</form>
@endsection
