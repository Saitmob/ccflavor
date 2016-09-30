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
        <link rel="stylesheet" id="css" href="/ccflavor/Public/css/videoStyle.css">
    

    <!--[if lt IE 10]>
    <link rel="stylesheet" id="css" href="/ccflavor/Public/css/ie.css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    
        <style>
            @media screen and (max-width:980px){
                .row-container{ width: 100%; }
                .c-page-body{ width: 100%; }
                .video-content .container{width: 100%;}
                .container-top-wrapper{width: 100%;}
                .c-top-l{width: 100%; clear: both;color: red;}
                .topic-preview-wrapper{ width: 100%; }

                .video-box .video-item{ width: 22%; }
                .video-box .video-item img{ width: 100%; height: 80%; }
                .player-box{ width: 100%; height:100%;}
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
    
    <!-- 主体内容 start -->
    <block name="body">
        <div class="video-content">
            <div class="container ">
                <div class="video-link">
                    <h2>
                        <a href="../index.html">ccFlavor</a><i> > </i><span><?php echo ($video['videoname']); ?></span>
                    </h2>
                </div>
                <!-- 视频简介 start -->
                <?php if($video['category']=='番剧'):?>

                <div class="video-info">
                    <div class="video-preview fl">
                        <img src="/ccflavor/Public/<?php echo ($pic); ?>" alt="">
                    </div>
                    <div class="info-content">
                        <div class="info-head"><h1><?php echo ($video['videoname']); ?></h1></div>
                        <div class="info-body">
                            <div class="update-time"><p><b>开播时间：<?php echo substr($video['videoupdate'],0,7);?>&nbsp;&nbsp;集数：<?php echo ($video['episode_total']); ?> </b><span class="badge"><i>已完结</i></span> </p></div>
                            <div class="info-desc"><span class="badge"><i>简介</i></span><br><span id="info-desc"><?php echo ($video['videoinfo']); ?></span></div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <!-- 视频简介 end -->
                <!--<table border="1">-->

                    <!--<?php if(is_array($list)): foreach($list as $key=>$obj): ?>-->
                        <!--<tr><td>id</td><td>vid</td></tr>-->
                        <!--<tr><td>id<?php echo ($obj['id']); ?></td><td><?php echo ($obj["vid"]); ?></td></tr>-->

                    <!--<?php endforeach; endif; ?>-->
                <!--</table>-->
                <!--<?php echo ($page); ?>-->
                <!-- 集数部分 start -->
                <div class="video-list">
                    <!-- <div class="list-content-pre"></div>
                    <div class="list-part-wrapper"></div> -->

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#list-part01" data-toggle="tab"><?php echo ($videos[0]["episode_num"]); ?>-<?php echo (($count>=6)?6:$count); ?></a></li>
                        <?php for($i=1;$i<$count/6;$i++): ?>
                            <li role="presentation"><a href="#list-part0<?php echo ($i+1); ?>" data-toggle="tab"><?php echo ($i*6+1); ?>-<?php if(($i*6+6)>$count) echo $count;else echo ($i*6+6); ?></a></li>
                        <?php endfor;?>

                        <!--<li role="presentation"><a href="#list-part02" data-toggle="tab">10-12</a></li>-->
                    </ul>
                    <div class=" list-part row">
                        <!-- 标签内容 start -->
                        <div class="tab-content">
                                <div class="tab-pane active" id="list-part01">
                                    <?php for($i=0;$i<(($count>6)?6:$count);$i++):?>
                                        <div class="list-group col-md-4">
                                            <a href="<?php echo U('video/player',['vid'=>$video['id'],'num'=>$i+1]);?>" class="list-group-item " target="player">
                                                <em><span class="badge"><i>第<?php echo ($videos["$i"]["episode_num"]); ?>话</i></span><?php echo ($videos["$i"]["episode_name"]); ?></em>
                                            </a>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            <?php for($i=1;$i<$count/6;$i++):?>
                            <div class="tab-pane" id="list-part0<?php echo ($i+1); ?>">
                                <?php for($j=$i*6;$j<$i*6+6;$j++):?>
                                <!--因为$j为当前集数-1，所以j等于总集数时，不再循环-->
                                <?php if($j==$count) break;?>
                                <div class="list-group col-md-4">

                                    <a href="<?php echo U('video/player',['vid'=>$video['id'],'num'=>$j+1]);?>" class="list-group-item " target="player">
                                        <em><span class="badge"><i>第<?php echo ($videos["$j"]["episode_num"]); ?>话</i></span><?php echo ($videos["$j"]["episode_name"]); ?></em>
                                    </a>

                                </div>
                                <?php endfor;?>
                            </div>
                            <?php endfor;?>

                        </div>
                        <!-- 标签内容结束 -->
                    </div>
                </div>
                <!-- 集数部分 end -->
                <!-- 播放器部分 start-->
                <div class="player-box">
                    <iframe src="<?php echo ($src?$src:$default_src); ?>" width="100%" height="100%" id="iframeSon" frameborder=0 scrolling="no" name="player"  marginheight="0" marginwidth="0"></iframe>
                </div>
                 <!--播放器部分 end-->
                <!--评论框 start-->
                <!--<div class="comment-content">-->
                    <!-- 多说评论框 start -->
                    <!--<div class="ds-thread" data-thread-key="1" data-title="刀剑神域" data-url="http://localhost/ccflavor/index.php/video/index/vid/1.html"></div>-->
                <!-- 多说评论框 start -->
                <div class="ds-thread" data-thread-key="<?php echo ($video['id']); ?>" data-title="刀剑神域" data-url="<?php echo U('Video/index',['vid'=>$video['id']]);?>"></div>
                <!-- 多说评论框 end -->
                <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                <script type="text/javascript">
                    var duoshuoQuery = {short_name:"saitmob"};
                    (function() {
                        var ds = document.createElement('script');
                        ds.type = 'text/javascript';ds.async = true;
                        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                        ds.charset = 'UTF-8';
                        (document.getElementsByTagName('head')[0]
                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                    })();
                </script>
                <!-- 多说公共JS代码 end -->
                    <!-- 多说评论框 end -->
                <!--</div>-->
                <!--评论框 end-->
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

//            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
//                var infoDesc = document.getElementById('info-desc');
//                infoDesc.innerHTML = infoDesc.innerHTML.substr(0,30)+' ......';
//            }


        var width = document.body.clientWidth?document.body.clientWidth:document.documentElement.clientWidth;
        if(width<1140&&width>300){
            $('player-box').height(width*0.8);
            $('iframe').height(width*0.7);

        }
        window.onresize = function(){
            width = document.body.clientWidth?document.body.clientWidth:document.documentElement.clientWidth;
            if(width<1140&&width>300){

                $('player-box').height(width*0.65);
                $('iframe').height(width*0.65);
            }
        }

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
            console.log(hidTop);
            if (hidTop>=10) {
                $('.c-sidebar .sidebar-item').css({'opacity':1,'fillter':100,'visibility':"visible"}); 
            }else{
                $('.c-sidebar .sidebar-item').css({'opacity':0,'fillter':0,'visibility':"hidden"});
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