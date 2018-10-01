@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-md-offset-3">
            
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::text('status') !!}
        
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content') !!}
        
                {!! Form::submit('更新') !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
