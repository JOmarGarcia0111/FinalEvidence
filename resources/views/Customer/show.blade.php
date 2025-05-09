@extends('layouts.main')

@section('title', 'Customer')

@section('content')
    <h1>{{ $customer->Name }}</h1>
    <p><strong>Email:</strong> {{ $customer->Email }}</p>
    <p><strong>Phone:</strong> {{ $customer->Phone }}</p>
    <p><strong>Created At:</strong> {{ $customer->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $customer->updated_at }}</p>

    <a href="{{ route('customer.index') }}">Back to list</a>
@endsection
