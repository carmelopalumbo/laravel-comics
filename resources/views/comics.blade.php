@extends('layouts.main')

@section('content')
    <main>
        <div class="inset">
            <h2 class>CURRENT SERIES</h2>
            <div class="box-cards">
                @foreach ($products as $product)
                    <a class="card" href="{{ route('details', ['id' => $product['id']]) }}">
                        <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}" />
                        <h4>{{ $product['title'] }}</h4>
                    </a>
                @endforeach
            </div>
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection
