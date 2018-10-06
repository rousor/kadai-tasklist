@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}さんのプロフィール</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">名前：{{ $user->name }}</a></li>
                <li><a href="#">メールアドレス：{{ $user->email }}</a></li>
                <li><a href="#">ID：{{ $user->id}}</a></li>
            </ul>
        </div>
    </div>
@endsection