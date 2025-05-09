@extends('layouts.main')

@section('title', 'Order List')

@section('content')
    <h1>Order</h1>

    <a href="{{ route('order.create') }}">
        <button>Create New Order</button>
    </a>

    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Customer ID</th>
                <th>User ID</th>
                <th>Status</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Customer_ID }}</td>
                    <td>{{ $item->User_ID }}</td>
                    <td>{{ $item->Status }}</td>
                    <td>
    
                        <a href="{{ route('order.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('order.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('order.destroy', $item->id) }}" method="POST" style="display:inline;">
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
