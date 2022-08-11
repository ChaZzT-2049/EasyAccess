@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as admin!') }}
                    {{-- registrar usuarios --}}
                    <a class="nav-link me-2 btn btn-primary btn-primary-outline-success text-white" href="{{ url('/register') }}">{{ __('Register User') }}</a>
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{!! Session::get('message') !!}
                                <a href="{{ url('/adminhome') }}">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </a>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
