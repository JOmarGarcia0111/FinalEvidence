@extends('layouts.main')

@section('title', 'Role List')

@section('content')
    <h1>Role</h1>

    <a href="{{ route('role.create') }}">
        <button>Create New Role</button>
    </a>

    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($role as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->Description }}</td>

                    <td>
    
                        <a href="{{ route('role.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('role.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('role.destroy', $item->id) }}" method="POST" style="display:inline;">
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
