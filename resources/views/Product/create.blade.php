@extends('layouts.main')

@section('title', 'Create Product')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <label for="Name">Name</label>
        <input type="text" name="Name" required>
        <br><br>

        <label for="Description">Description</label>
        <input type="text" name="Description" required>
        <br><br>

        <label for="Unit_Price">Unit Price</label>
        <input type="float" name="Unit_Price" required>
        <br><br>

        <label for="Stock">Stock</label>
        <input type="number" name="Stock" required>
        <br><br>

        <label for="Warehouse">Warehouse</label>
        <select name="Warehouse" required>
            @foreach ($WH as $warehouse)
                <option value="{{ $warehouse->id }}">{{ $warehouse->id }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="Category_ID">Category ID</label>
        <select name="Category_ID" required>
            @foreach ($CatID as $category)
                <option value="{{ $category->id }}">{{ $category->id }}</option>
            @endforeach
        </select>
        <br><br>

        <input type="submit" value="Create Product">

        <br><br>
        <a href="{{ route('product.index') }}">Back to Product List</a>
    </form>
@endsection
