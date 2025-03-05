@extends('layout')

@section('title', 'Holló Vadászbolt -Audio termékek')

@section('content')
    <h1>Audio termékek</h1>

    <div class="row">
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fullhalgato1.jpg' ) }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Vezeték nélküli fülhallgató</h3>
            <p>14 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fullhalgato2.jpg' ) }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Vezeték nélküli fülhallgató</h3>
            <p>14 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fullhalgato3.jpg' ) }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Vezeték nélküli fülhallgató</h3>
            <p>14 990 Ft</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fullhalgato4.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Vezeték nélküli fülhallgató</h3>
            <p>14 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fullhalgato5.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Vezeték nélküli fülhallgató</h3>
            <p>14 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fullhalgato6.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Vezeték nélküli fülhallgató</h3>
            <p>14 990 Ft</p>
        </div>
    </div>

    <a href="{{ url('/products') }}">Vissza a kategóriákhoz</a>
@endsection
