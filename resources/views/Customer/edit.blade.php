@extends('layouts.main')

@section('title', 'Edit Customer')

@section('content')
    <h1>Edit Customer</h1>

    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Name">Name</label>
        <input type="text" Name="Name" value="{{ $customer->Name }}" required>
        <br><br>

        <label for="Email">Email</label>
        <input type="text" name="Email" value="{{ $customer->Email }}" required>
        <br><br>

        <label for="Phone">Phone</label>
        <input type="text" name="Phone" value="{{ $customer->Phone }}" required>
        <br><br>

        <input type="submit" value="Edit Customer">

        <br><br>

        <a href="{{ route('customer.index') }}">Back to List</a>
    </form>
@endsection