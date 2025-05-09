@extends('layouts.main')

@section('title', 'Order')

@section('content')
    <p><strong>Customer ID:</strong> {{ $order->Customer_ID }}</p>
    <p><strong>User ID:</strong> {{ $order->User_ID }}</p>
    <p><strong>Status:</strong> {{ $order->Status }}</p>
    <p><strong>Created At:</strong> {{ $order->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $order->updated_at }}</p>

    <a href="{{ route('order.index') }}">Back to list</a>
@endsection
