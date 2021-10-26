@extends('layouts.dashboard')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ __('Dashboard') }}</h3>
                <p class="text-subtitle text-muted">{{_('Subtitle')}}</p>
            </div>
            {{-- Breadcrumb --}}
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Holaa !!</h4>
            </div>
            <div class="card-body">
                {{ __('You are logged in!') }}

            </div>
        </div>
    </section>
</div>
@endsection
