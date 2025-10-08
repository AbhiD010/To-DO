@extends('layouts.app')

@section('content')
<h3>Edit Task</h3>
<form action="{{ route('tasks.update', $task) }}" method="POST">
  @csrf @method('PUT')
  @include('tasks._form')
</form>
@endsection
