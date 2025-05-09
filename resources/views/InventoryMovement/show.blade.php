@extends('layouts.main')

@section('title', 'Inventory Movement')

@section('content')

    <p><strong>ID:</strong> {{ $IM->id }}</p>
    <p><strong>Product ID:</strong> {{ $IM->Product_ID }}</p>
    <p><strong>Movement Type:</strong> {{ $IM->Movement_Type }}</p>
    <p><strong>Quantity:</strong> {{ $IM->Quantity }}</p>
    <p><strong>User ID:</strong> {{ $IM->User_ID }}</p>
    <p><strong>Created At:</strong> {{ $IM->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $IM->updated_at }}</p>
    

    <a href="{{ route('im.index') }}">Back to list</a>
@endsection
