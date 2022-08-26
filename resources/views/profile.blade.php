@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">{{ __('Perfil de Usuario') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <b class="col-md-4 text-md-center bg-primary text-white">Nombre:</b>
                        <div class="col-md-8 border">
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                        <b class="col-md-4 text-md-center bg-primary text-white">Correo:</b>
                        <div class="col-md-8 border">
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                        <b class="col-md-4 text-md-center bg-primary text-white">Tipo:</b>
                        <div class="col-md-8 border">
                            <p>{{ Auth::user()->tipo }}</p>
                        </div>
                        <b class="col-md-4 text-md-center bg-primary text-white">Creado el:</b>
                        <div class="col-md-8 border">
                            <p>{{ Auth::user()->created_at }}</p>
                        </div>
                        <b class="col-md-4 text-md-center bg-primary text-white">Actualizado el:</b>
                        <div class="col-md-8 border">
                            <p>{{ Auth::user()->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection