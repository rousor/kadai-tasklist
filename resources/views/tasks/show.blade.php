@extends('layouts.app')

@section('content')

    <h1>id =タスク詳細ページ（{{ $task->id }}）</h1>

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
        <tr>
            <th class="active">更新日時</th>
            <td>{{ $task->created_at->format('Y年m月d日 H:00') }} </td>
        </tr>
        <tr>
            <th class="active">作成日時</th>
            <td>{{ $task->created_at->format('Y年m月d日 H:00')  }}</td>
        </tr>
    </table>


    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id], ['class' => 'btn btn-info']) !!}
    <p></p>
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
