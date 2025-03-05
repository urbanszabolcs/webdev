@extends('layout')

@section('title', 'Holló Vadászbolt - Autok')

@section('content')
    <h1>Autok</h1>

    <div class="row">
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/auto1.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Prémium okosóra</h3>
            <p>29 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/auto2.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Prémium okosóra</h3>
            <p>29 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/auto3.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Prémium okosóra</h3>
            <p>29 990 Ft</p>
        </div>
    </div>

    <a href="{{ url('/products') }}">Vissza a kategóriákhoz</a>
@endsection
