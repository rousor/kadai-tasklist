@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-md-offset-3">

            {!! Form::model($task, ['route' => 'tasks.store']) !!}

                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::text('status') !!}

                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content') !!}

                {!! Form::submit('投稿') !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection

