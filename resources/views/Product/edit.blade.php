@extends('layouts.main')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="Name">Name</label>
        <input type="text" name="Name" value="{{ $product->Name }}" required>
        <br><br> 

        <label for="Description">Description</label>
        <input type="text" name="Description" value="{{ $product->Description }}" required>
        <br><br>

        <label for="Unit_Price">Unit Price</label>
        <input type="number" step="0.01" name="Unit_Price" value="{{ $product->Unit_Price }}" required>
        <br><br>

        <label for="Stock">Stock</label>
        <input type="number" name="Stock" value="{{ $product->Stock }}" required>
        <br><br>

        <label for="Warehouse">Warehouse</label>
        <select name="Warehouse" required>
            @foreach ($WH as $warehouse)
                <option value="{{ $warehouse->id }}" {{ $product->Warehouse == $warehouse->id ? 'selected' : '' }}>
                    {{ $warehouse->id }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="Category_ID">Category ID</label>
        <select name="Category_ID" required>
            @foreach ($CatID as $category)
                <option value="{{ $category->id }}" {{ $product->Category_ID == $category->id ? 'selected' : '' }}>
                    {{ $category->id }}
                </option>
            @endforeach
        </select>
        <br><br>

        <input type="submit" value="Edit Product">
        <br><br>

        <a href="{{ route('product.index') }}">Back to Product List</a>
    </form>
@endsection
