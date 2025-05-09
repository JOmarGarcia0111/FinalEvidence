@extends('layouts.main')

@section('title', 'Create Order')

@section('content')
    <h1>Create Order</h1>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <label for="Customer">Customer</label>
        <select name="Customer_ID" required>
            @foreach ($customer as $customer)
                <option value="{{ $customer->id }}">{{ $customer->id }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="User">User</label>
        <select name="User_ID" required>
            @foreach ($user as $user)
                <option value="{{ $user->id }}">{{ $user->id }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="Status">Status</label>
        <input type="text" name="Status" required>
        <br><br>

        <input type="submit" value="Create Order">

        <br><br>

        <a href="{{ route('order.index') }}">Back to Category List</a>
    </form>
@endsection
