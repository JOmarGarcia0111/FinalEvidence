@extends('layouts.main')

@section('title', 'Product List')

@section('content')
    <h1>Product</h1>

    <a href="{{ route('product.create') }}">
        <button>Create New product</button>
    </a>

    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th> 
                <th>Unit Price</th>
                <th>Stock</th>
                <th>Warehouse</th>
                <th>Category ID</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->Description }}</td>
                    <td>{{ $item->Unit_Price }}</td>
                    <td>{{ $item->Stock }}</td>
                    <td>{{ $item->Warehouse }}</td>
                    <td>{{ $item->Category_ID }}</td>
                    <td>
    
                        <a href="{{ route('product.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('product.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
