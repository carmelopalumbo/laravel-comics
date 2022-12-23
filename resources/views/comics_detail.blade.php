@extends('layouts.main')

@section('content')
    <main>
        <div class="details-container">
            <div class="inset-detail">

                <div class="thumb-detail">
                    <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                    <p>{{ $product['type'] }}</p>
                    <p>VIEW GALLERY</p>
                </div>

                <div class="descr">
                    <h3>{{ $product['title'] }}</h3>
                    <div class="box-price">
                        <p>PRICE: {{ $product['price'] }}</p>
                        <p>AVAILABLE</p>
                    </div>
                    <p class="text">{{ $product['description'] }}</p>
                </div>

                <div class="footer-descr">
                    <div class="talent">
                        <h4>Talent</h4>
                        <p> <strong>Art by:</strong> {{ implode(', ', $product['artists']) }} </p>
                        <p><strong>Written by:</strong>
                            {{ implode(', ', $product['writers']) }}</p>
                    </div>

                    <div class="specs">
                        <h4>Specs</h4>
                        <p> <strong>Series:</strong>{{ $product['series'] }}</p>
                        <p><strong>Price:</strong> {{ $product['price'] }}</p>
                        <p><strong>On Sale Date:</strong> {{ $product['sale_date'] }}</p>
                    </div>
                </div>
            </div>
    </main>
@endsection
