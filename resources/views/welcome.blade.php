@extends('layouts.app')

@section('content')
<div class="container">
    {{-- crousel de imagenes --}}
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img class="d-block w-80" src="https://images.pexels.com/photos/1181271/pexels-photo-1181271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img class="d-block w-80" src="https://images.pexels.com/photos/270408/pexels-photo-270408.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="slide2">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img class="d-block w-80" src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="slide3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- descripcion --}}
    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Una pagina web para agilizar su medio de trabajo</h1>
        <p class="p-3  fs-4">
            <span class="text-primary">EasyAccess</span> es lo que usted necesita para gestionar, agilizar y administrar toda su area de trabajo.
        </p>
    </section>
    <section class="w-100">
        <div class="row w-75 mx-auto" id="servicios-fila-1">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img src="https://images.pexels.com/photos/330771/pexels-photo-330771.jpeg?auto=compress&cs=tinysrgb&w=400" alt="concepto" width="140" height="120">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                    <p class="px-4">Desarrollo de la base de datos para la gestion de personal.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img src="https://images.pexels.com/photos/7319291/pexels-photo-7319291.jpeg?auto=compress&cs=tinysrgb&w=400" alt="desarrollo" width="140" height="120">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Plantillas</h3>
                    <p class="px-4">Diseño, Conceptualización e Implementación para sus areas de trabajo.</p>
                </div>
            </div>
        </div>
    </section >
</div>
@endsection