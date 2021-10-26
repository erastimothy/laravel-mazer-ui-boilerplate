@extends('layouts.app')

@section('title','Verify Your Email Address')
@section('subtitle','')

@section('content')
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('click here to request another') }}</button>.
    </form>
@endsection
