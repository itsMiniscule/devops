@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a New Plant</h1>
        <form action="{{ route('plants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name:</label>
                <label>
                    <input type="text" name="name" class="form-control" required>
                </label>
            </div>
            <div class="mb-3">
                <label>Species:</label>
                <label>
                    <input type="text" name="species" class="form-control" required>
                </label>
            </div>
            <div class="mb-3">
                <label>Care Instructions:</label>
                <label>
                    <textarea name="care_instructions" class="form-control"></textarea>
                </label>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
