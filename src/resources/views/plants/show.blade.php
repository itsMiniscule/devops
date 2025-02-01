@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $plant->name }}</h1>
        <p><strong>Species:</strong> {{ $plant->species }}</p>
        <p><strong>Care Instructions:</strong> {{ $plant->care_instructions }}</p>

        <a href="{{ route('plants.edit', $plant->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('plants.destroy', $plant->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>

        <a href="{{ route('plants.index') }}" class="btn btn-secondary">Back to Collection</a>
    </div>
@endsection
