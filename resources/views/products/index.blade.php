@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @foreach($products as $product)
        <div>
            <h2><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h2>
            <p>{{ $product->description }}</p>
            <p>${{ $product->price }}</p>
        </div>
    @endforeach
@endsection
