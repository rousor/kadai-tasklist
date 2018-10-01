@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="active">id</th>
                    <th class="active">ステータス</th>
                    <th class="active">タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status}}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! link_to_route('tasks.create', '新規タスクの投稿' , null ,['class' => 'btn btn-info']) !!}
    @endif
    

@endsection
