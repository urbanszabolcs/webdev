@extends('layout')

@section('title', 'Fegyverek')

@section('content')
    <h1>Fegyverek</h1>

    <div class="row">
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fegyver1.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Stílusos hátizsák</h3>
            <p>19 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fegyver2.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Stílusos hátizsák</h3>
            <p>19 990 Ft</p>
        </div>
        <div class="col-md-4 product-card">
            <img src="{{ asset('assets/images/fegyver3.jpg') }}" class="img-fluid product-img" alt="Fülhallgató">
            <h3>Stílusos hátizsák</h3>
            <p>19 990 Ft</p>
        </div>
    </div>

    <a href="{{ url('/products') }}">Vissza a kategóriákhoz</a>
@endsection
