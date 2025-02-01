@extends('layouts.app')
@section('content')
    <style>
        .btn-primary {
            background-color: saddlebrown !important;
            border-color: saddlebrown !important;
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        <h1>My Plant Collection</h1>
        <a href="{{ route('plants.create') }}" class="btn btn-primary">Add New Plant</a>

        <div class="row">
            @foreach ($plants as $plant)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plant->name }}</h5>
                            <p class="card-text">{{ $plant->species }}</p>
                            <a href="{{ route('plants.show', $plant->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('plants.edit', $plant->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('plants.destroy', $plant->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this plant?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
