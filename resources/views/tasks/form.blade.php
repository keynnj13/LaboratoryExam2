<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $task->title ?? '') }}">
    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="is_completed" {{ old('is_completed', $task->is_completed ?? false) ? 'checked' : '' }}>
    <label class="form-check-label">Completed</label>
</div>

<button class="btn btn-primary">Submit</button>