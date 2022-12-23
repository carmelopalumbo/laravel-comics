@extends('layouts.main')

@section('content')
    <main>
        <a class="card-box" href="#">
            @foreach ($products as $product)
                <div class="card">
                    <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}" />
                    <h4>{{ $product['title'] }}</h4>
                </div>
            @endforeach
        </a>
    </main>
@endsection
