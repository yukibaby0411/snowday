<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container" style="width: 1100px; padding: 0;">
        <a href="{{ route('home') }}" id="logo">u1tu social</a>
        <nav>
            <ul class="nav navbar-nav navbar-right">
                @if(1)
                    <li><a href="#">消息(0)</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            snowday0312 <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">个人中心</a></li>
                            <li><a href="#">编辑资料</a></li>
                            <li class="divider"></li>
                            <li>
                                <a id="logout" href="#">
                                    <form action="">
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="#">登录</a></li>
                    <li><a href="#">注册</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>