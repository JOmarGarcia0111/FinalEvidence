@extends('layouts.main')

@section('title', 'Create Customer')

@section('content')
    <h1>Create Customer</h1>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf

        <label for="Name">Name</label>
        <input type="text" name="Name" required>
        <br><br>

        <label for="Email">Email</label>
        <input type="text" name="Email" required>
        <br><br>

        <label for="Phone">Phone</label>
        <input type="text" name="Phone" required>
        <br><br>

        <input type="submit" value="Create customer">

        <br><br>

        <a href="{{ route('customer.index') }}">Back to List</a>
    </form>
@endsection
