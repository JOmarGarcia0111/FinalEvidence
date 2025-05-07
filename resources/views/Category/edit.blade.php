@extends('layouts.main')

@section('title', 'Edit Category')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Name">Name</label>
        <input type="text" Name="Name" value="{{ $category->Name }}" required>

        <br><br>

        <input type="submit" value="Edit Category">

        <br><br>

        <a href="{{ route('category.index') }}">Back to Category List</a>
    </form>
@endsection
