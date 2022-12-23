@extends('layouts.main')

@section('content')
    <main>
        <div class="details-container">
            <div class="inset-detail">

                <div class="thumb-detail">
                    <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                    <p>{{ $product['series'] }}</p>
                    <p>VIEW GALLERY</p>
                </div>

                <div class="descr">
                    <h3>{{ $product['title'] }}</h3>
                    <div class="box-price">
                        <p>{{ $product['price'] }}</p>
                    </div>
                    <p>{{ $product['description'] }}</p>
                </div>

                <div class="footer-descr">
                    <div class="talent">
                        <h4>Art by: {{ implode(', ', $product['artists']) }} | Written by:
                            {{ implode(', ', $product['writers']) }} </h4>
                    </div>

                    <div class="specs">
                        <p>Series: {{ $product['series'] }}</p>
                        <p>Series: {{ $product['price'] }}</p>
                        <p>Series: {{ $product['sale_date'] }}</p>
                    </div>
                </div>
            </div>
    </main>
@endsection
