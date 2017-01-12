@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    <!--判断会话中是否存在$msg键对应的值-->
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach