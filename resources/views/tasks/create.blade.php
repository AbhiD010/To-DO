@extends('layouts.app')

@section('content')
<h3>Add Task</h3>
<form action="{{ route('tasks.store') }}" method="POST">
  @include('tasks._form')
</form>
@endsection
