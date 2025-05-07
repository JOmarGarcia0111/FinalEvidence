@extends('layouts.main')

@section('title', 'Category List')

@section('content')
    <h1>Category</h1>

    <a href="{{ route('category.create') }}">
        <button>Create New Category</button>
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
            @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>
    
                        <a href="{{ route('category.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('category.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('category.destroy', $item->id) }}" method="POST" style="display:inline;">
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
