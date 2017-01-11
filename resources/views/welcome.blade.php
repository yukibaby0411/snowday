<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
                -webkit-user-select:none;
                -moz-user-select:none;
                -ms-user-select:none;
                user-select:none;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                font-size: 72px;
                cursor: default;
            }

            .title {
                display: none;
            }
        </style>

        <script src="/js/app.js"></script>
        <script>
            $(document).ready(function () {
                setTimeout("$('.title1').fadeOut(1000)",750);
                setTimeout("$('.title2').fadeIn(1000)",1750);
                setTimeout("$('.title2').fadeOut(1000)",3500);
                setTimeout("$('.title3').fadeIn(1000)",4500);
                setTimeout("$('.title3').fadeOut(1000)",6250);
                setTimeout("$('.title4').fadeIn(1000)",7250);
                setTimeout("$('.title4').fadeOut(1000)",9000);
                setTimeout("window.location.href='http://snowday.app'",9500);
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title1">永远相信...</div>
                <div class="title title2">美好的事情即将发生</div>
                <div class="title title3">欢迎来到优一兔社区</div>
                <div class="title title4">即将开启你的新奇之旅</div>
            </div>
        </div>
    </body>
</html>
