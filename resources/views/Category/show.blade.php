@extends('layouts.main')

@section('title', 'Category')

@section('content')
    <h1>{{ $category->Name }}</h1>

    <p><strong>Created At:</strong> {{ $category->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $category->updated_at }}</p>

    <a href="{{ route('category.index') }}">Back to list</a>
@endsection
