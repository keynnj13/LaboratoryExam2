@extends('layouts.app')

@section('content')
<h2>Create New Task</h2>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="is_completed" {{ old('is_completed') ? 'checked' : '' }}>
        <label class="form-check-label">Completed</label>
    </div>

    <button class="btn btn-success"> <i class="bi bi-floppy"></i> Create Task</button>
</form>
@endsection