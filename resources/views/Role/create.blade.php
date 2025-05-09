@extends('layouts.main')

@section('title', 'Create Role')

@section('content')
    <h1>Create Role</h1>

    <form action="{{ route('role.store') }}" method="POST">
        @csrf

        <label for="Name">Name</label>
        <input type="text" name="Name" required>
        <br><br>

        <label for="Description">Description</label>
        <input type="text" name="Description" required>
        <br><br>

        <input type="submit" value="Create Role">

        <br><br>

        <a href="{{ route('role.index') }}">Back to List</a>
    </form>
@endsection

