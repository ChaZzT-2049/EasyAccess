@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as admin!') }}
                    {{-- registrar usuarios 
                        <a class="nav-link me-2 btn btn-primary btn-primary-outline-success text-white" href="{{ url('/register') }}">{{ __('Register User') }}</a>
                    --}}
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{!! Session::get('message') !!}
                                <button type="button" class="btn btn-success" data-dismiss="alert">
                                    <a href="{{ url('/adminhome') }}" class="text-white">
                                        <i class="icon ion-md-close mr-2 lead"></i>
                                    </a>
                                </button>
                            </p>
                        </div>
                    @endif
                    @if(Session::has('warning'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>{!! Session::get('warning') !!}
                                <button type="button" class="btn btn-danger" data-dismiss="alert">
                                    <a href="{{ url('/adminhome') }}" class="text-white">
                                        <i class="icon ion-md-close mr-2 lead"></i>
                                    </a>
                                </button>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
