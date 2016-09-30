<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <!--暂不使用viewport-->
    <title>ccFlavor</title>
    <link rel="stylesheet" href="/ccflavor/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ccflavor/Public/css/reset.css">
    <link rel="stylesheet" href="/ccflavor/Public/css/iconfont.css">
    <link rel="stylesheet" href="/ccflavor/Public/css/sidebar.css">
    
        <link rel="stylesheet" id="css" href="/ccflavor/Public/css/indexStyle.css">
        <link rel="stylesheet" href="/ccflavor/Public/css/nivo-slider.css">
        <link rel="stylesheet" href="/ccflavor/Public/themes/default/default.css" type="text/css" media="screen" />
    

    <!--[if lt IE 10]>
    <link rel="stylesheet" id="css" href="/ccflavor/Public/css/ie.css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    
        <style>

            .theme-default .nivo-controlNav{ padding:0px 0;}
            @media screen and (max-width:980px){
                .row-container{ width: 100%; }
                .c-page-body{ width: 100%; }
                .container-top-wrapper{width: 100%;}
                .c-top-l{width: 100%; clear: both;color: red;}
                .topic-preview-wrapper{ width: 100%; }
                .section-left{width: 68%; text-align: center;}
                .section-left .panel-body{text-align: center;}
                .section-right{width: 28%;}
                /*原移动端兼容*/
                /*.video-box .video-item{ clear: both;*/
                    /*position: relative;*/
                    /*left:50%; margin-left: -100px; }*/
                .video-box .video-item img{ width: 100%;}
            }

        </style>
    
    <style>
        @media screen and (max-width:980px){
            .row-container{ width: 100%; }
            .bottom-bar { padding: 0 50px;}
            .row-container .navbar-form{ margin-top: 20px;}
            .c-page-body{ width: 100%;  padding: 0 15px;}
            .c-footer{padding: 20px 20px;}
        }
        
    </style>
</head>
<body>
<!-- 页面头部 -->
<div class="header">
    <div class="top-bar">
        <div class="row-container">
            <span class="pull-left" id="shouye"><a href="<?php echo U('index/index');?>">首页</a></span>
            <div class="pull-right"></div>
            <ul class="fr">
                <li class="fl" id="login-btn"><a href="<?php echo U('index/register');?>">登录</a></li>
                <li class="fl" id="register-btn"><a href="<?php echo U('index/register');?>">注册</a></li>
            </ul>

        </div>
    </div>
    <div class="bottom-bar">
        <div class="row-container">
            <form class="navbar-form navbar-right search" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn search-btn">搜索</button>
            </form>
        </div>
    </div>

</div>

<!-- 页面主体 -->
<div class="c-page-body">
    <!-- 主体菜单 -->
    <div class="row-container">
        <div class="index-nav">
            <ul class="nav-menu">
                <!-- <li class="menu-active"></li> -->
                <li class="menu-item-list"><a href="<?php echo U('index/index');?>" class="">首页</a></li>
                <li class="menu-item-list">
                    <a href="" class="menu-itme-a">动漫</a>
                    <ul>
                        <li class="sub-menu-item"><a href="" class="">番剧</a></li>
                        <li class="sub-menu-item"><a href="" class="">短片</a></li>
                        <li class="sub-menu-item"><a href="" class="">MAD</a></li>
                    </ul>

                </li>
                <li class="menu-item-list">
                    <a href="" class="menu-itme-a">游戏</a>
                    <ul>
                        <li class="sub-menu-item"><a href="" class="">手游</a></li>
                        <li class="sub-menu-item"><a href="" class="">网游</a></li>
                        <li class="sub-menu-item"><a href="" class="">单机</a></li>
                    </ul>
                </li>
                <li class="menu-item-list">
                    <a href="" class="menu-itme-a">影视</a>
                    <ul>
                        <li class="sub-menu-item"><a href="" class="">电视剧</a></li>
                        <li class="sub-menu-item"><a href="" class="">电影</a></li>
                        <li class="sub-menu-item"><a href="" class="">综艺</a></li>
                    </ul>
                </li>
                <li  class="menu-item-list"><a href="" class="menu-itme-a">资讯</a></li>
            </ul>
        </div>
    </div>
    <!-- 主体菜单 end -->
    <!-- 页面主体内容开始 -->
    
    <div class="index-container">
        <div class="row-container">
    <!-- 主要内容头部 -->
    <div class="container-top-wrapper">
        <div class="c-top-l fl">
            <div class="panel panel-default">
                <div class="panel-heading">热门资讯</div>

                <div class="list-group">
                    <a href="#" class="list-group-item">
                        Cras justo odio
                    </a>
                    <a href="" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="" class="list-group-item">Morbi leo risus</a>
                    <a href="" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="" class="list-group-item">Vestibulum at eros</a>
                </div>

            </div>
        </div>

        <div class="topic-preview-wrapper fr">
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <a href="<?php echo U('video/index',['vid'=>9]);?>">
                        <img src="/ccflavor/Public/images/topic_preview_01.jpg" data-thumb="//ccflavor/Publicimages/topic_preview_01.jpg" alt=""/></a>
                        <a href="<?php echo U('video/index',['vid'=>2]);?>"><img src="/ccflavor/Public/images/topic_preview_02.jpg" data-thumb="images/topic_preview_02.jpg" alt=""
                                        title="空之境界"/></a>
                        <a href="<?php echo U('video/index',['vid'=>7]);?>">
                        <img src="/ccflavor/Public/images/topic_preview_03.jpg" data-thumb="/ccflavor/Public/images/topic_preview_03.jpg" alt="" data-transition="slideInLeft" title="灵能百分百"/></a>
                        <a href="<?php echo U('video/index',['vid'=>6]);?>">
                        <img src="/ccflavor/Public/images/topic_preview_04.jpg" data-thumb="/ccflavor/Public/images/topic_preview_04.jpg" alt="" title="#htmlcaption"/></a>
                    </div>
                    <div id="htmlcaption" class="nivo-html-caption">
                        <strong></strong> <em></em>  <a href="#">热诚传说X</a>.
                    </div>
                </div>
                <div class="footer-banner" style="width:728px; margin:0 auto"></div>
            </div>
        </div>

    </div>
    <!-- 主要内容头部 end -->

    <!-- 单行内容开始 -->
    <div class="row-container fl">

        <!-- 左 -->
        <div class="section-left">
            <div class="panel panel-default">
                <div class="panel-heading">番剧</div>
                <div class="panel-body">
                    <div class="video-box" id="video-box">
                        <ul>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>1]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_f_01.jpg" alt="">
                                    <p>刀剑神域</p>
                                    <div class="video-caption"><p><strong>亚丝娜！！</strong></p></div>
                                </a>
                            </li>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>2]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_f_02.jpg" alt="">
                                    <p>空之境界</p>
                                    <div class="video-caption"><p><strong>空之境界</strong></p></div>
                                </a>
                            </li>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>6]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_f_03.jpg" alt="">
                                    <p>热诚传说X</p>
                                    <div class="video-caption"><p><strong>热诚传说X</strong></p></div>
                                </a>
                            </li>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>7]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_f_04.jpg" alt="">
                                    <p>灵能百分百</p>
                                    <div class="video-caption"><p><strong>影山茂夫！</strong></p></div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- 右 -->
        <div class="section-right">
            <div class="rank-head">排行</div>
            <ul class="rank-body">
                <li>
                    <i class="num n1">1</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>7]);?>">灵能百分百</a></div>
                </li>
                <li>
                    <i class="num n2">2</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>6]);?>">热诚传说X</a></div>
                </li>
                <li>
                    <i class="num n3">3</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>1]);?>">刀剑神域</a></div>
                </li>
                <li>
                    <i class="num">4</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>2]);?>">空之境界</a></div>
                </li>
                <li>
                    <i class="num">5</i>
                    <div class="title"><a href="">甲铁城的卡巴内瑞</a></div>
                </li>
                <li>
                    <i class="num">6</i>
                    <div class="title"><a href="">甲铁城的卡巴内瑞</a></div>
                </li>
                <li>
                    <i class="num">7</i>
                    <div class="title"><a href="">甲铁城的卡巴内瑞</a></div>
                </li>
            </ul>
        </div>
    </div>
    <!-- 单行内容 end -->
    <!-- 单行内容 start -->
    <div class="row-container fl">

        <!-- 左 -->
        <div class="section-left">
            <div class="panel panel-default">
                <div class="panel-heading">动画</div>
                <div class="panel-body">
                    <div class="video-box">
                        <ul>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>5]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_d_01.jpg" alt="">
                                    <p>西鲁vs梅路艾姆</p>
                                    <div class="video-caption"><p><strong>蚁王！！</strong></p></div>
                                </a>
                            </li>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>4]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_d_02.jpg" alt="">
                                    <p>超人vs琦玉</p>
                                    <div class="video-caption"><p><strong>一击男！</strong></p></div>
                                </a>
                            </li>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>8]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_d_03.jpg" alt="">
                                    <p>你永远不知道电脑对面和你聊天的是到底谁</p>
                                    <div class="video-caption"><p><strong>你永远不知道电脑对面和你聊天的是到底谁</strong></p></div>
                                </a>
                            </li>
                            <li class="video-item">
                                <a href="<?php echo U('video/index',['vid'=>9]);?>">
                                    <img src="/ccflavor/Public/images/video/vi_d_04.jpg" alt="">
                                    <p>战斗吧，就算牺牲生命也在所不惜</p>
                                    <div class="video-caption"><p><strong>战斗吧，就算牺牲生命也在所不惜</strong></p></div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- 右 -->
        <div class="section-right">
            <div class="rank-head">排行</div>
            <ul class="rank-body">
                <li title="战斗吧，就算牺牲生命也在所不惜">
                    <i class="num n1">1</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>9]);?>">战斗吧，就算牺牲生命也在所不惜</a></div>
                </li>
                <li title="西鲁vs梅路艾姆">
                    <i class="num n2">2</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>5]);?>">西鲁vs梅路艾姆</a></div>
                </li>
                <li title="你永远不知道电脑对面和你聊天的是到底谁">
                    <i class="num n3">3</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>8]);?>">你永远不知道电脑对面和你聊天的是到底谁</a></div>
                </li>
                <li title="超人vs琦玉">
                    <i class="num">4</i>
                    <div class="title"><a href="<?php echo U('video/index',['vid'=>4]);?>">超人vs琦玉</a></div>
                </li>
                <li title="甲铁城的卡巴内瑞">
                    <i class="num">5</i>
                    <div class="title"><a href="">甲铁城的卡巴内瑞</a></div>
                </li>
                <li>
                    <i class="num">6</i>
                    <div class="title"><a href="">甲铁城的卡巴内瑞</a></div>
                </li>
                <li>
                    <i class="num">7</i>
                    <div class="title"><a href="">甲铁城的卡巴内瑞</a></div>
                </li>
            </ul>
        </div>
    </div>
        </div>
    </div>


    <!-- 页面主体内容 end -->
</div>
<!-- 页面主体 end -->
<!--侧边栏-->
<div class="c-sidebar">
    <a href="javascript:;" class="sidebar-item">
    <div class="sidebar-btn iconfont icon-huidaodingbu"></div>
    <div class="sidebar-btn sidebar-tips">回到<br>顶部</div>
    </a>
</div>

<div class="c-footer">
    <div class="row-container">
        <div class="footer-link">
            <ul>
                <li>
                    <a href="">关于我们</a>
                </li>
                <li>
                    <a href="">友情链接</a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p class="text-center">本站仅是大自然的搬运工，并不提供视听上传服务，所有内容均来自视频分享站点所提供的公开引用资源</p>
            <p class="text-center">Copyright &copy; 2016 Saitmob<span> QQ 973043289</span></p>
        </div>
    </div>
</div>




<script type="text/javascript" src="/ccflavor/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/ccflavor/Public/js/jquery.LoadImage.js"></script>
<script type="text/javascript" src="/ccflavor/Public/js/jquery.nivo.slider.pack.js"></script>
<script src="/ccflavor/Public/js/jquery-Color-animate-1.60.js"></script>
<script src="/ccflavor/Public/js/bootstrap.min.js"></script>
<script src="/ccflavor/Public/js/getVersion.js"></script>

    <script>
        /*img轮播*/
        $('#slider').nivoSlider();
    </script>


<script>

    $(document).ready(function(){
        if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
            $('body').css('font-size','10px');

        }
        $('.menu-item-list').css('overflow','visible');
        // }
        /*图片预加载*/
         $('#slider img').LoadImage(true,570,230,"images/loading.gif");
        $('.video-item img').LoadImage(true,200,140,"images/loading.gif");
        var bg = new Array();
        function loadBg(){
            for (i = 0; i < loadBg.arguments.length; i++) {
                bg[i] = new Image();
                bg[i].src = loadBg.arguments[i];
            }
        }
        loadBg('images/header_bg.jpg','images/sign_in_up_bodyBg_02.jpg');
        /*侧边栏重定位 如果被卷去的高度大于100则显示*/
        var left = $('.row-container').width()+$('.row-container').offset().left;
        $('.c-sidebar').css({'position':'fixed','left':left+20,'bottom':"200px"});
        var hidTop = document.body.scrollTop?document.body.scrollTop:document.documentElement.scrollTop;
        window.onscroll = function(){
            hidTop = document.body.scrollTop?document.body.scrollTop:document.documentElement.scrollTop;
            if (hidTop>=10) {
                $('.c-sidebar .sidebar-item').css({'opacity':1,'fillter':'alpha(opacity=100)','visibility':"visible"}); 
            }else{
                $('.c-sidebar .sidebar-item').css({'opacity':0,'fillter':'alpha(opacity=0)','visibility':"hidden"});
            }
        }
        window.onresize = function(){
            left = $('.row-container').width()+$('.row-container').offset().left;
            $('.c-sidebar').css('left',left+10);
        }
        /*回到顶部*/
        $('.c-sidebar .sidebar-item').click(function(){
            $('html,body').animate({scrollTop: '0px'}, 200);
        })

        /*获取版本*/
        var browser = getBrowserInfo() ;

        var version;
        function hoverJs(){
            if (browser!=null && browser[0].substr(0,4)=='msie') {
                // alert(browser[0].substr(5,6));
                version = parseInt(browser[0].substr(5,6));
                // alert(version);
                if (version<10) {
                    // alert('ie 版本太低,部份效果将不显示！');
                    if(version<=8)//如果低于8则返回
                    {

                        return false;
                    }
                }
            }
            /*topbar*/
            $('.top-bar a').hover(function(){
                $(this).animate({backgroundColor:"#61d1f8",color:'#fff'},150);
            },function(){

                if ($(this).hasClass('menu-active')) { return;}
                $(this).animate({backgroundColor:'transparent',color:'#656565'},100);
            });
            $('.nav-menu a').hover(function(){
                $(this).stop();
                $(this).animate({backgroundColor:"#fff",color:'#656565'},150);
                $(this).css('box-shadow','0 0 20px #61d1f8');
                // $(this).find('sub-menu-item').css('transform','rotateY(0deg)');
            },function(){
                $(this).css({'box-shadow':'none'});
                if ($(this).hasClass('menu-active')) { return;}
                $(this).stop();
                $(this).animate({backgroundColor:'transparent',color:'#fff'},100);
            });

            //submenu
            var time =0;
            var timer;
            $('.menu-item-list').hover(function(){
//                $(this).css('overflow','visible');
//                $(this).on('tap',function(){
//                    $(this).css('overflow','visible');
//                });
                // $(this).find('ul').css('visibility','visible');
                // $(this).find('ul').css('display','block');
//                clearInterval(timer);
                var subMenuItems = $(this).find('li');
//                $(this).find('ul').css('overflow','visible');
                for(var i=0;i<subMenuItems.length;i++){
                    subMenuItems[i].style.transition = 'transform '+(200*i+200)+'ms';
                    subMenuItems[i].style.transform = 'rotateY(0deg)';
                }
            },function(){

                var subMenuItems = $(this).find('li');

                for(var i=0;i<subMenuItems.length;i++){
                    subMenuItems[i].style.transition = 'transform '+(200*i+200)+'ms';
                    subMenuItems[i].style.transform = 'rotateY(90deg)';
                    time+=200*i+200;
                }
//                timer = setTimeout(function(){
//                    $(this).find('ul').css('overflow','hidden');
//                },300);


            });

            /*video-box*/
            $('.video-item').hover(function(){
                var caption = $(this).find('.video-caption');
                caption.stop(false,true);
                $(this).css('box-shadow','0 0 20px #61d1f8');
                $(this).find('p:first').css('color','#EF6565');
                caption.animate({height:'60px'},300);

            },function(){
                var caption = $(this).find('.video-caption');
                $(this).find('img+p').css('color','#656565');
                $(this).css({'box-shadow':'none'});
                caption.stop().animate({height:'0px'},300);
            })
        }

        if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
//            $('body').css('font-size','10px');
        }else {
            hoverJs();
        }



    });


</script>
</body>
</html>