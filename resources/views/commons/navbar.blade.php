<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container" style="background:#494949;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">課題管理ページ</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>{!! link_to_route('users.index', 'ユーザ一覧') !!}</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'プロフィール', ['id' => Auth::id()]) !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_route('tasks.create', '新規タスクを追加', null , ['class' => 'bg-primary text-warning']) !!}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>