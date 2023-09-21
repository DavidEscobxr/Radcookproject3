@extends('layouts.app')


@section('content')

<div class="container">

    <div class="container py-5">

    </div>
    <div class="row justify-content-center "  >

        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                <div class="card-header shadow-sm rounded"><h2>Arroz con leche</h2></div>
                <div class="card-body">
                    <img class="receta rounded" src="{{ asset('images/huevoperico.jpg') }}" alt="">
                  <h2 class="card-title">Light card title</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                <div class="card-header shadow-sm rounded"><h2>Arroz con leche</h2></div>
                <div class="card-body">
                    <img class="receta rounded" src="{{ asset('images/arrozconleche.jpg') }}" alt="">
                  <h2 class="card-title">Light card title</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                <div class="card-header shadow-sm rounded"><h2>Arroz con leche</h2></div>
                <div class="card-body">
                    <img class="receta rounded" src="{{ asset('images/arrozconleche.jpg') }}" alt="">
                  <h2 class="card-title">Light card title</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark py-3 text-center">
        <a href="#" class="text-white">Todos los derechos reservados</a>
    </footer>


</div>


<img class="logo" src="{{ asset('images/logo.png') }}"
@endsection
