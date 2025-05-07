@extends('layouts.main')

@section('title', 'Edit Movement')

@section('content')
    <h1>Edit Movement</h1>

    <form action="{{ route('im.update', $IM->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Prouct_ID">Product ID</label>
        <select name="Product_ID" required>
            @foreach ($product as $product)
                <option value="{{ $product->id }}" {{ $IM->product == $product->id ? 'selected' : '' }}>
                    {{ $product->id }}
                </option>
                @endforeach
                </select>
                <br><br>
        
        <label for="Movement_Type">Movement_Type</label>
        <input type="text" name="Movement_Type" value="{{ $IM->Movement_Type }}" required>
        <br><br>

        <label for="Quantity">Quantity</label>
        <input type="number" name="Quantity" value="{{ $IM->Quantity }}" required>
        <br><br>

        <label for="User_ID">User_ID</label>
        <select name="User_ID" required>
            @foreach ($UserID as $User_ID)
                <option value="{{ $User_ID->id }}" {{ $IM->User_ID == $User_ID->id ? 'selected' : '' }}>
                    {{ $User_ID->id }}
                </option>
                @endforeach
                </select>
                <br><br>

        <input type="submit" value="Edit Category">

        <br><br>

        <a href="{{ route('im.index') }}">Back to List</a>
    </form>
@endsection
