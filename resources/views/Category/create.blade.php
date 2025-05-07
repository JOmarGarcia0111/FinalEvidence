@extends('layouts.main')

@section('title', 'Create Category')

@section('content')
    <h1>Create Category</h1>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <label for="Name">Name</label>
        <input type="text" Name="Name" required>

        <br><br>

        <input type="submit" value="Create Category">

        <br><br>

        <a href="{{ route('category.index') }}">Back to Category List</a>
    </form>
@endsection
