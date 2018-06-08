@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のtask詳細ページ</h1>

    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id]) !!}
    
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}

@endsection
