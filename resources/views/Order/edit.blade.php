@extends('layouts.main')

@section('title', 'Edit Order')

@section('content')
    <h1>Edit Order</h1>

    <form action="{{ route('order.update', $order->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Status">Status</label>
        <input type="text" name="Status" value="{{ $order->Status }}" required>
        <br><br>


        <label for="Customer">Customer</label>
        <select name="Customer_ID" required>
            @foreach ($customer as $customer)
                <option value="{{ $customer->id }}" {{ $order->Customer_ID == $customer->id ? 'selected' : ''}}>
                {{ $customer->id }}

                </option>
            @endforeach
        </select>
        <br><br>

        <label for="User_ID">User ID</label>
        <select name="User_ID" required>
            @foreach ($user as $userid)
                <option value="{{ $userid->id }}" {{ $order->User_ID == $userid->id ? 'selected' : '' }}>
                    {{ $userid->id }}
                </option>
            @endforeach
        </select>
        <br><br>

        <input type="submit" value="Edit order">
        <br><br>

        <a href="{{ route('order.index') }}">Back to List</a>
    </form>
@endsection
