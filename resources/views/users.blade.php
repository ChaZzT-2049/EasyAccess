@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header bg-primary text-white text-center">{{ __('Usuarios') }}</div>

              <div class="card-body">
                  <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/allusers') }}">{{ __('See All Users') }}</a>
                  {{ __('Which group of users you want to see?') }}
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all students</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/students') }}">{{ __('Estudiantes') }}</a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all personal</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/personal') }}">{{ __('Personal') }}</a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all visitors</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/visitantes') }}">{{ __('Visitantes') }}</a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all services</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/servicios') }}">{{ __('Servicios') }}</a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all providers</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/proveedores') }}">{{ __('Proveedores') }}</a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all admins</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/admins') }}">{{ __('Admins') }}</a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <b class="col-md-4 text-md-end">See a list of all others</b>
                    <div class="col-md-6">
                      <a class="nav-link me-2 btn btn-primary text-white" href="{{ url('/otros') }}">{{ __('Otros') }}</a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection