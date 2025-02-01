@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Plant</h1>

        <form action="{{ route('plants.update', $plant->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Plant Name</label>
                <label>
                    <input type="text" name="name" class="form-control" value="{{ $plant->name }}" required>
                </label>
            </div>

            <div class="mb-3">
                <label for="species" class="form-label">Species</label>
                <label>
                    <input type="text" name="species" class="form-control" value="{{ $plant->species }}" required>
                </label>
            </div>

            <div class="mb-3">
                <label for="care_instructions" class="form-label">Care Instructions</label>
                <label>
                    <textarea name="care_instructions" class="form-control" rows="4">{{ $plant->care_instructions }}</textarea>
                </label>
            </div>

            <button type="submit" class="btn btn-success">Update Plant</button>
            <a href="{{ route('plants.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
