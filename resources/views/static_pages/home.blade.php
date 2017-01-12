@extends('layouts.default')

@section('title', '主页')

@section('from', 'home')

@section('link')
    <link type="text/css" rel="stylesheet" href="css/hua_default.css">
    <script type="text/javascript" src="js/hua_jscex.min.js"></script>
    <script type="text/javascript" src="js/hua_jscex-parser.js"></script>
    <script type="text/javascript" src="js/hua_jscex-jit.js"></script>
    <script type="text/javascript" src="js/hua_jscex-builderbase.min.js"></script>
    <script type="text/javascript" src="js/hua_jscex-async.min.js"></script>
    <script type="text/javascript" src="js/hua_jscex-async-powerpack.min.js"></script>
    <script type="text/javascript" src="js/hua_functions.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/hua_love.js" charset="utf-8"></script>
    <style type="text/css">
        <!--
        .STYLE1 {
            color: #666666
        }
        -->
    </style>
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('content')
    <audio autoplay="autopaly">
        <source src="/plugins/kisstherain.mp3" type="audio/mp3" />
    </audio>
    <div id="main" style="margin-top: -10px;">
        <div id="error">本页面采用HTML5编辑，目前您的浏览器无法显示，请换成谷歌(<a href="http://www.google.cn/chrome/intl/zh-CN/landing_chrome.html?hl=zh-CN&brand=CHMI">Chrome</a>)或者火狐(<a href="http://firefox.com.cn/download/">Firefox</a>)浏览器，或者其他游览器的最新版本。</div>
        <div id="wrap">
            <div id="text">
                <div id="code">
                    <font color="#ff0066">
                        <span class="say"> 你现在看到的是：优一兔社区（首页）</span><br>
                        <span class="say"></span><br>
                        <span class="say"> 她现在还是幼儿，但终有一天会长大</span><br>
                        <span class="say"> 她有一个梦想 ——</span><br>
                        <span class="say nbsp"> 要成为every coder心中一隅温婉而独特的风景</span><br>
                        <span class="say"></span><br>
                        <span class="say"> 你可以过来听听音乐，玩玩小游戏</span><br>
                        <span class="say"> 也可以在这里看到业内的新鲜资讯</span><br>
                        <span class="say"> 可以在论坛跟大家交流技术和分享经历</span><br>
                        <span class="say"> 或者在公开博客浏览你感兴趣的文章</span><br>
                        <span class="say"> 这里有开源的代码实例</span><br>
                        <span class="say"> 当然，也欢迎你把优秀的代码分享出来</span><br>
                        <span class="say"> 如果你想求职或者招聘相关岗位，相信优一兔也愿意给你提供帮助</span><br>
                        <span class="say"> </span><br>
                        <span class="say"> 优一兔希望能给你家一样的舒适感</span><br>
                        <span class="say"> 这个大家庭欢迎你的加入</span><br>
                        <span class="say"></span><br>
                        <span class="say"></span><br>
                        <span class="say"><span class="space"></span> ~~ By Snowday0312 ~~ </span>
                    </font>
                    </p>
                </div>
            </div>
            <div id="clock-box"> <span class="STYLE1"></span><font color="#ff8030">社区开始建设</font> <span class="STYLE1">已经……</span>
                <div id="clock"></div>
            </div>
            <canvas id="canvas" width="1100" height="680" style="margin-left: -15px;"></canvas>
        </div>
    </div>
    <script>
        (function (){
            var canvas = $('#canvas');

            if (!canvas[0].getContext) {
                $("#error").show();
                return false;        }

            var width = canvas.width();
            var height = canvas.height();
            canvas.attr("width", width);
            canvas.attr("height", height);
            var opts = {
                seed: {
                    x: width / 2 - 20,
                    color: "rgb(190, 26, 37)",
                    scale: 2
                },
                branch: [
                    [535, 680, 570, 250, 500, 200, 30, 100, [
                        [540, 500, 455, 417, 340, 400, 13, 100, [
                            [450, 435, 434, 430, 394, 395, 2, 40]
                        ]],
                        [550, 445, 600, 356, 680, 345, 12, 100, [
                            [578, 400, 648, 409, 661, 426, 3, 80]
                        ]],
                        [539, 281, 537, 248, 534, 217, 3, 40],
                        [546, 397, 413, 247, 328, 244, 9, 80, [
                            [427, 286, 383, 253, 371, 205, 2, 40],
                            [498, 345, 435, 315, 395, 330, 4, 60]
                        ]],
                        [546, 357, 608, 252, 678, 221, 6, 100, [
                            [590, 293, 646, 277, 648, 271, 2, 80]
                        ]]
                    ]]
                ],
                bloom: {
                    num: 700,
                    width: 1080,
                    height: 650,
                },
                footer: {
                    width: 1200,
                    height: 5,
                    speed: 10,
                }
            }

            var tree = new Tree(canvas[0], width, height, opts);
            var seed = tree.seed;
            var foot = tree.footer;
            var hold = 1;

            /*
            canvas.click(
                function(e) {
                var offset = canvas.offset(), x, y;
                x = e.pageX - offset.left;
                y = e.pageY - offset.top;
                if (seed.hover(x, y)) {
                    hold = 0;
                    canvas.unbind("click");
                    canvas.unbind("mousemove");
                    canvas.removeClass('hand');
                }
            }).mousemove(function(e){
                var offset = canvas.offset(), x, y;
                x = e.pageX - offset.left;
                y = e.pageY - offset.top;
                canvas.toggleClass('hand', seed.hover(x, y));
            });
            */

            /* 自定义sleep
             function sleep(numberMillis) {
                 var now = new Date();
                 var exitTime = now.getTime() + numberMillis;
                 while (true) {
                 now = new Date();
                 if (now.getTime() > exitTime)
                 return;
                 }
             }
            */

            canvas.click(function () {hold = 0;});  //点击整个canvas即给hold赋值

            var seedAnimate = eval(Jscex.compile("async", function () {
                seed.draw();
                while (hold) {
                    $await(Jscex.Async.sleep(10));
                }
                while (seed.canScale()) {
                    seed.scale(0.95);
                    $await(Jscex.Async.sleep(10));
                }
                while (seed.canMove()) {
                    seed.move(0, 2);
                    foot.draw();
                    $await(Jscex.Async.sleep(10));
                }
            }));

            var growAnimate = eval(Jscex.compile("async", function () {
                do {
                    tree.grow();
                    $await(Jscex.Async.sleep(10));
                } while (tree.canGrow());
            }));

            var flowAnimate = eval(Jscex.compile("async", function () {
                do {
                    tree.flower(2);
                    $await(Jscex.Async.sleep(10));
                } while (tree.canFlower());
            }));

            var moveAnimate = eval(Jscex.compile("async", function () {
                tree.snapshot("p1", 240, 0, 610, 680);
                while (tree.move("p1", 500, 0)) {
                    foot.draw();
                    $await(Jscex.Async.sleep(10));
                }
                foot.draw();
                tree.snapshot("p2", 500, 0, 610, 680);

                // 会有闪烁不得意这样做, (＞﹏＜)
                canvas.parent().css("background", "url(" + tree.toDataURL('image/png') + ")");
                canvas.css("background", "#ffe");
                $await(Jscex.Async.sleep(300));
                canvas.css("background", "none");
            }));

            var jumpAnimate = eval(Jscex.compile("async", function () {
                var ctx = tree.ctx;
                while (true) {
                    tree.ctx.clearRect(0, 0, width, height);
                    tree.jump();
                    foot.draw();
                    $await(Jscex.Async.sleep(25));
                }
            }));

            var textAnimate = eval(Jscex.compile("async", function () {
                var together = new Date();
                together.setFullYear(2016, 12, 11); 		//时间年月日 2017/1/11/8:30
                together.setHours(8);						//小时
                together.setMinutes(30);					//分钟
                together.setSeconds(0);					    //秒前一位
                together.setMilliseconds(0);				//秒第二位

                $("#code").show().typewriter();
                $("#clock-box").fadeIn(500);
                while (true) {
                    timeElapse(together);
                    $await(Jscex.Async.sleep(1000));
                }
            }));

            var runAsync = eval(Jscex.compile("async", function () {
                $await(seedAnimate());
                $await(growAnimate());
                $await(flowAnimate());
                $await(moveAnimate());

                textAnimate().start();

                $await(jumpAnimate());
            }));

            runAsync().start();
        })();

        setTimeout("$('#canvas').click()",1000);

    </script>
@stop