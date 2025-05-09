@extends('layouts.main')

@section('title', 'Role')

@section('content')
    <h1>{{ $role->Name }}</h1>
    <p><strong>Description:</strong> {{ $role->Description }}</p>
    <p><strong>Created At:</strong> {{ $role->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $role->updated_at }}</p>

    <a href="{{ route('role.index') }}">Back to list</a>
@endsection
