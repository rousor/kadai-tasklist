@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th class="active">id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th class="active">ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th class="active">タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>


    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id], ['class' => 'btn btn-info']) !!}
    <p></p>
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
