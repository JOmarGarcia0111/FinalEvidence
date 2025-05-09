@extends('layouts.main')

@section('title', 'Edit Role')

@section('content')
    <h1>Edit Role</h1>

    <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Name">Name</label>
        <input type="text" Name="Name" value="{{ $role->Name }}" required>

        <br><br>
        <label for="Description">Description</label>
        <input type="text" name="Description" value="{{ $role->Description }}" required>

        <br><br>

        <input type="submit" value="Edit Role">

        <br><br>

        <a href="{{ route('role.index') }}">Back to List</a>
    </form>
@endsection
