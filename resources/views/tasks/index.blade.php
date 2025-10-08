@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h3>Tasks</h3>
  <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Due Date</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($tasks as $task)
      <tr>
        <td>{{ $task->title }}</td>
        <td>{{ Str::limit($task->description, 80) }}</td>
        <td>{{ $task->due_date ? $task->due_date->format('d M Y') : '-' }}</td>
        <td>
          @if($task->is_completed)
            <span class="badge bg-success">Done</span>
          @else
            <span class="badge bg-warning text-dark">Pending</span>
          @endif
        </td>
        <td style="width:260px">
          <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-secondary">Edit</a>

          <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="d-inline">
            @csrf @method('PATCH')
            <button class="btn btn-sm btn-info">{{ $task->is_completed ? 'Mark Pending' : 'Mark Done' }}</button>
          </form>

          <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="4">No tasks yet.</td></tr>
    @endforelse
  </tbody>
</table>

{{ $tasks->links() }}
@endsection
