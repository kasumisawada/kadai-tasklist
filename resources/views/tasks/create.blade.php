@extends('layouts.app')

@section('content')

<h1>Create new task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}
    
@endsection
