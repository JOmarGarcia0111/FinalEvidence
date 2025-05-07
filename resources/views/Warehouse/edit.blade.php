@extends('layouts.main')

@section('title', 'Edit Warehouse')

@section('content')
    <h1>Edit Warehouse</h1>

    <form action="{{ route('warehouse.update', $warehouse->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Name">Name</label>
        <input type="text" Name="Name" value="{{ $warehouse->Name }}" required>

        <br><br>

        <input type="submit" value="Edit Warehouse">

        <br><br>

        <a href="{{ route('warehouse.index') }}">Back to Warehouse List</a>
    </form>
@endsection
