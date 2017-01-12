<style>
    /*logo*/
    .wrap_logo{ display: inline-block; width:132px; height:55px; padding:4px; position:relative; top:5px;}
    .logo{ border-radius:6px;}
    .logoimg{ width:45px; height:45px;}
    .logotxt1,.logotxt2{ color:white; font-family:"微软雅黑"; position:absolute;}
    .logotxt1{ line-height:25px; top:7px; letter-spacing:3px; left:52px;}
    .logotxt2{ line-height:15px; top:32px; font-weight:bold; left:53px;}
    /*footer*/
    footer{ background-color:#ff634e; width:100%; height:234px; position:relative;}
    .mainF{ width:1100px; height:170px; position:relative; left:50%; margin-left:-550px; color: #ffccb4; font-size:14px; line-height:40px;}
    .mainF h3{ font-size:15px; margin-top:15px;}
    .mainF ul{ margin-left:20px; }
    .foot1,.foot2,.foot3,.foot4,.foot5{ width:220px; height:170px; border-right:2px solid #be1a25; float:left;}
    .foot5{border:0;}
    .foot5 img{ width:70px; height:70px; margin-left:50px; margin-top:-5px;}
    .bottom{ width:100%; height:62px; position:relative; border-top:2px solid #be1a25;}
    .bottomM{ width:1100px; height:62px; position:relative; left:50%; margin-left:-550px;}
    .bottomM span{ position:absolute; font-size:14px;}
    .bottomM .logotxt1{ font-size:22px;}
    .bottomM .logotxt2{ font-size:15px;}
    .spanNC{ left:140px; top:10px; color:#be1a25;}
    .spanC{ right:0; top:9px; letter-spacing:2px; color:#be1a25;}
    .spanGV1{ right:212px; bottom:9px; color:#ffccb4;}
    .spanGV2{ right:0; bottom:9px; color:#ffccb4;}
    .imgGV{ position:absolute; right:190px; bottom:10px;}
    .mainF div ul a{ color: #ffccb4;}
    .mainF div ul a:hover{ color: white; text-decoration: none;}
</style>
<footer>
    <div class="mainF">
        <div class="foot1">
            <ul>
                <h3><a href="{{ route('about') }}">关于</a></h3>
                <li>什么是优一兔</li>
                <li>优一兔通告</li>
                <li>加入优一兔</li>
            </ul>
        </div>
        <div class="foot2">
            <ul>
                <h3>条款</h3>
                <li>服务条款</li>
                <li>隐私条款</li>
            </ul>
        </div>
        <div class="foot3">
            <ul>
                <h3>声明</h3>
                <li>优一兔声明</li>
                <li>产品设计与保护</li>
            </ul>
        </div>
        <div class="foot4">
            <ul>
                <h3><a href="{{ route('help') }}">帮助</a></h3>
                <li>优一兔社区</li>
                <li>防骗说明</li>
                <li>联络方式</li>
            </ul>
        </div>
        <div class="foot5">
            <ul>
                <h3>更多</h3>
                <li>合作连接</li>
            </ul>
            <img src="/images/code.png">
        </div>
    </div>
    <div class="bottom">
        <div class="bottomM">
            <a href="{{ route('home') }}" class="wrap_logo">
                <div class="logo">
                    <img src="/images/logo.png" class="logoimg">
                    <span class="logotxt1">优一兔</span><br>
                    <span class="logotxt2">u1tu.com</span>
                </div>
            </a>
            <span class="spanNC">NETWORK COMPANY</span>
            <span class="spanC">Copyright 2016-2018 u1tu.com ALL rights reserved</span>
            <span class="spanGV1">粤ICP证090351号|</span>
            <img src="/images/gv.png" class="imgGV">
            <span class="spanGV2">粤公网安备 110103005113号 </span>
        </div>
    </div>
</footer>