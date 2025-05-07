@extends('layouts.main')

@section('title', 'Show Warehouse')

@section('content')
    <h1>{{ $warehouse->Name }}</h1>

    <p><strong>Created At:</strong> {{ $warehouse->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $warehouse->updated_at }}</p>

    <a href="{{ route('warehouse.index') }}">Back to list</a>
@endsection
