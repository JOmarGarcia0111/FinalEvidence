@extends('layouts.main')

@section('title', 'Create Movement')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('im.store') }}" method="POST">
        @csrf
        <label for="Produt_ID">Product ID</label>
        <select name="Product_ID" required>
            @foreach ($product as $product)
                <option value="{{ $product->id }}">{{ $product->id }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="Movement_Type">Movement_Type</label>
        <input type="text" name="Movement_Type" required>
        <br><br>

        <label for="Quantity">Quantity</label>
        <input type="number" name="Quantity" required>
        <br><br>

        <label for="User_ID">UserID</label>
        <select name="User_ID" required>
            @foreach ($User_ID as $User_ID)
                <option value="{{ $User_ID->id }}">{{ $User_ID->id }}</option>
            @endforeach
        </select>
        <br><br>

        

        <input type="submit" value="Create Movement">

        <br><br>
        <a href="{{ route('im.index') }}">Back to List</a>
    </form>
@endsection
