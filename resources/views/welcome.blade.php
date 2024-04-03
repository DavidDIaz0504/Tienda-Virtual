@extends('layaouts.app')

@section('content')

<style>
    .carousel-item img {
        width: 50%; 
        height: auto; 
        display: block;
        margin: 0 auto; 
    }
    </style>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/slider-1.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider-2.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider-3.png') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    <h1 class="text-center m-5">Productos</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="  {{ asset('img/ponmi.png') }}  " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ponmi Pelusche</h5>
                        <p class="card-text">Ingresa para ver los eventos disponibles a la fecha</p>
                        <a href="/detail" class="btn btn-primary">IR A EVENTOS --></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="  {{ asset('img/Bonnie.png') }}  " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">TIENDA $-$</h5>
                        <p class="card-text">Si estas interesado en comprar articulos de anime para ti ingresa aqui</p>
                        <a href="#" class="btn btn-primary">IR A TIENDA --></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="  {{ asset('img/king.png') }}  " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOVEDADES 7w7</h5>
                        <p class="card-text">si quieres ver lo ultimo en anime/noticias ingresa aqui</p>
                        <a href="#" class="btn btn-primary">IR A NOVEDADES --></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="  {{ asset('img/guy1.png') }}  " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOSOTROS 0-0</h5>
                        <p class="card-text">Si quieres contactarnos ingresa aqui</p>
                        <a href="#" class="btn btn-primary">IR A NOSOTROS--></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
