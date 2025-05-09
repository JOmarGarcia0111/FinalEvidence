@extends('layouts.main')

@section('title', 'Customer List')

@section('content')
    <h1>Customer</h1>

    <a href="{{ route('customer.create') }}">
        <button>Create New Customer</button>
    </a>

    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->Email }}</td>
                    <td>{{ $item->Phone }}</td>


                    <td>
    
                        <a href="{{ route('customer.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('customer.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('customer.destroy', $item->id) }}" method="POST" style="display:inline;">
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
