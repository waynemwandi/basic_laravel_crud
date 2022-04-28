@extends('layouts.master')

@section('content')

    <h1>{{ $task->title }}</h1>
    <p class="lead">{{ $task->description }}</p>
    <hr>

    <a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all tasks</a>
    <a href="" class="btn btn-primary">Edit Task</a>

    {{-- {{ route('tasks.edit', $task->id) }} --}}

    <div class="pull-right">
        <a href="#" class="btn btn-danger">Delete this task</a>
    </div>

@stop
