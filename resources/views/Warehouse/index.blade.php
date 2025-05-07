@extends('layouts.main')

@section('title', 'Warehouse List')

@section('content')
    <h1>Warehouse</h1>

    <a href="{{ route('warehouse.create') }}">
        <button>Create New warehouse</button>
    </a>

    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($warehouse as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>
    
                        <a href="{{ route('warehouse.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('warehouse.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('warehouse.destroy', $item->id) }}" method="POST" style="display:inline;">
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
