@extends('layouts.main')

@section('title', 'Create Warehouse')

@section('content')
    <h1>Create Warehouse</h1>

    <form action="{{ route('warehouse.store') }}" method="POST">
        @csrf

        <label for="Name">Name</label>
        <input type="text" Name="Name" required>

        <br><br>

        <input type="submit" value="Create Warehouse">

        <br><br>

        <a href="{{ route('warehouse.index') }}">Back to Warehouse List</a>
    </form>
@endsection
