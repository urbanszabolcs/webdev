@extends('layout')

@section('title', 'Holló Vadászbolt -Termékek')

@section('content')
    <h1>Termékeink</h1>

    <!--

                                            <div class="mb-3">
                                                <h3>Kategóriák</h3>
                                                <ul>
                                                    <li><a href="{{ url('/products/audio') }}">Audio termékek</a></li>
                                                    <li><a href="{{ url('/products/cars') }}">Autok</a></li>
                                                    <li><a href="{{ url('/products/guns') }}">Fegyverek</a></li>
                                                </ul>
                                            </div>
                                         -->
    <div class="row">
        <div class="col-md-4 product-card">
            <a href="{{ url('/products/audio') }}">

                <img src="{{ asset('assets/images/audio.jpg') }}" class="img-fluid product-img" alt="Audio">

                <h3>Audio Termékek</h3>
            </a>

        </div>

        <div class="col-md-4 product-card">
            <a href="{{ url('/products/cars') }}">
                <img src="{{ asset('assets/images/autok.jpg') }}" class="img-fluid product-img" alt="Autok">

                <h3>Autok</h3>
            </a>

        </div>
        <div class="col-md-4 product-card">
            <a href="{{ url('/products/guns') }}">

                <img src="{{ asset('assets/images/fegyverek.jpg') }}" class="img-fluid product-img" alt="Fegyverek">

                <h3>Fegyverek</h3>
            </a>

        </div>

    </div>





@endsection
