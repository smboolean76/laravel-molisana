@extends('layouts.main')

@section('page-title')
Homepage
@endsection

@section('page-content')
    <section class="section-products py-5">
        <div class="container">
            <h2>Lista prodotti</h2>
            <div class="row g-3">
                @foreach ($pasta as $product)
                    <div class="col-md-4">
                        <div class="ms-card">
                            <img class="img-fluid" src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                            <h4>{{ $product['titolo'] }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection