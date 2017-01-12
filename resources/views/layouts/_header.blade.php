<style>
    .nav_line{ cursor: default;}
    .navbar-left{ margin-left: 25px;}
    .head_img{ width: 30px; height: 30px; border-radius: 50%;}
    /*white-space:nowrap; overflow:hidden; text-overflow:ellipsis;*/
    @media only screen and (max-width:777px){
        nav{ display: none;}
    }
</style>
<header class="navbar navbar-fixed-top navbar-inverse" style=" max-height: 51px; ">
    <div class="container" style="width: 1100px; padding: 0 ;">
        <a href="{{ route('home') }}" id="logo">u1tu social</a>
        <nav>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="">社区</a></li>
                <li><a href="javascript:void(0);" class="nav_line"> | </a></li>
                <li><a href="">博客</a></li>
                <li><a href="javascript:void(0);" class="nav_line"> | </a></li>
                <li><a href="">资讯</a></li>
                <li><a href="javascript:void(0);" class="nav_line"> | </a></li>
                <li><a href="">Code</a></li>
                <li><a href="javascript:void(0);" class="nav_line"> | </a></li>
                <li><a href="">招聘</a></li>
                <li><a href="javascript:void(0);" class="nav_line"> | </a></li>
                <li><a href="">休闲</a></li>
            </ul>
        </nav>
        <nav>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="#">消息(0)</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;padding-bottom: 10px;">
                            <img src="/images/logo.png" class="head_img">
                            <span class="user">{{ Auth::user()->name }}</span>&nbsp;<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">个人中心</a></li>
                            <li><a href="#">编辑资料</a></li>
                            <li class="divider"></li>
                            <li>
                                <a id="logout" href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}  <!--生产伪造delete请求的隐藏域-->
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">登录</a></li>
                    <li><a href="{{ route('users.create') }}">注册</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>