@extends('layouts.main')

@section('title', 'Inventory Movement List')

@section('content')
    <h1>Inventory Movement</h1>

    <a href="{{ route('im.create') }}">
        <button>Create New Inventory Movement</button>
    </a>

    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product ID</th>
                <th>Movement Type</th> 
                <th>Quantity</th>
                <th>User ID</th>
        
            </tr>
        </thead>
        <tbody>
            @foreach ($IM as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Product_ID }}</td>
                    <td>{{ $item->Movement_Type }}</td>
                    <td>{{ $item->Quantity}}</td>
                    <td>{{ $item->User_ID}}</td>

                    <td>
    
                        <a href="{{ route('im.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('im.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('im.destroy', $item->id) }}" method="POST" style="display:inline;">
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
