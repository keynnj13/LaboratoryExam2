@extends('layouts.app')

@section('content')
<h2>Task List</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>
                @if($task->is_completed)
                <span class="badge bg-success">Completed</span>
                @else
                <span class="badge bg-warning">Pending</span>
                @endif
            </td>
            <td>
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete task?')"><i class="bi bi-trash3"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection