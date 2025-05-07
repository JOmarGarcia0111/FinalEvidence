@extends('layouts.main')

@section('title', 'Show Product')

@section('content')
    <h1>{{ $product->Name }}</h1>
    <p><strong>Description:</strong> {{ $product->Description }}</p>
    <p><strong>Unit Price:</strong> {{ $product->Unit_Price }}</p>
    <p><strong>Stock:</strong> {{ $product->Stock}}</p>
    <p><strong>Warehouse:</strong> {{ $product->Warehouse}}</p>
    <p><strong>Category ID:</strong> {{ $product->Category_ID }}</p>
    <p><strong>Created At:</strong> {{ $product->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $product->updated_at }}</p>

    <a href="{{ route('product.index') }}">Back to list</a>
@endsection
