<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ccFlavor</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" id="css" href="../css/indexStyle.css">
<link rel="stylesheet" id="css" href="../css/videoStyle.css">
<!-- <link rel="stylesheet" id="css" href="css/style.css"> -->

<!--[if lt IE 10]>
<link rel="stylesheet" id="css" href="../css/ie.css">
<![endif]-->
<!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
<![endif]-->
<style>

/*	.navbar{ min-height: 30px; }
	.navbar-brand{padding: 0;height: 30px;line-height: 30px;}
	.search-form{margin:0;}
	.search-input{height: 25px;padding: 4px 6px;margin-top: 4px;}
	.search-btn{margin: 0;}*/
	/*html,body{ font-family: 'Microsoft YaHei'; }*/
.theme-default .nivo-controlNav{ padding:0px 0;}
@media screen and (max-width:980px){
	.row-container{ width: 100%; }
	.c-page-body{ width: 100%; }
	.container-top-wrapper{width: 100%;}
	.c-top-l{width: 100%; clear: both;color: red;}
	.topic-preview-wrapper{ width: 100%; }
	.video-box .video-item{ width: 22%; }
	.video-box .video-item img{ width: 100%; height: 80%; }
	.player-box{ width: 100%; }
}
</style>

</head>
<body>
	 <!-- 页面头部 -->
	<div class="header">
		<div class="top-bar">
			<div class="container">
				<span class="pull-left"><a href="">首页</a></span>
				<div class="pull-right"></div>
				<ul class="fr">
        			<li class="fl" id="login-btn"><a href="../register.html">登录</a></li>
        			<li class="fl" id="register-btn"><a href="../register.html">注册</a></li>
        		</ul>
			
			</div>
		</div>
		<div class="bottom-bar">
			<div class="container">
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
		<div class="container">
			<div class="index-nav">
					<ul class="nav-menu">
						<!-- <li class="menu-active"></li> -->
						<li class="menu-item-list"><a href="../index.html" class="">首页</a></li>			
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
		<!-- 主体内容 start -->
		<div class="video-content">
			<div class="container ">
				<div class="video-link">
					<h2>
						<a href="../index.html">ccFlavor</a><i> > </i><span>甲铁城的卡巴内瑞</span>
					</h2>
				</div>
				<!-- 视频简介 start -->
				<div class="video-info">
					<div class="video-preview fl">
						<img src="../images/video/vid_pre_jtc_01.jpg" alt="">
					</div>
					<div class="info-content">
						<div class="info-head"><h1>甲铁城的卡巴内瑞</h1></div>
						<div class="info-body">
							<div class="update-time"><p><b>2016年4月开播 </b><span class="badge"><i>已完结</i></span> </p></div>
							<div class="info-desc"><span class="badge"><i>简介</i></span><br><span>本作是一部以蒸汽机发达的岛国“日之本”为舞台的蒸汽朋克生存动作剧，作品主要描写了拥有钢铁心脏的僵尸=“卡巴内”与乘上装甲蒸汽机车“甲铁城”的少年少女的存亡之战。该作标题中的“卡巴内瑞”指的是介于“卡巴内”与人类之间的存在。</span></div>
						</div>
					</div>
				</div>
				<!-- 视频简介 end -->
				<!-- 集数部分 start -->
				<div class="video-list">
					<!-- <div class="list-content-pre"></div>
					<div class="list-part-wrapper"></div> -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#list-part01" data-toggle="tab">0-9</a></li>
						<li role="presentation"><a href="#list-part02" data-toggle="tab">10-12</a></li>
					</ul>
					<div class=" list-part row">
						<!-- 标签内容 start -->
						<div class="tab-content">
							<div class="tab-pane active" id="list-part01">

								<div class="list-group col-md-6">
									<a href="../video.php?vid=01" class="list-group-item " target="player">
										<em><span class="badge"><i>第1话</i></span>惊恐的卡巴内</em>
									</a>
									<a href="../video.php?vid=02" class="list-group-item "  target="player">
										<em><span class="badge"><i>第2话</i></span>不明的夜晚</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第3话</i></span>祈祷奉献</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第4话</i></span>流动的血液</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第5话</i></span>5</em>
									</a>
								</div>
								<div class="list-group col-md-6">
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第6话</i></span>惊恐的卡巴内</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第7话</i></span>不明的夜晚</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第8话</i></span>祈祷奉献</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第9话</i></span>流动的血液</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第10话</i></span>流动的血液</em>
									</a>
								</div>
							</div>
							<div class="tab-pane" id="list-part02">
								<div class="list-group col-md-6">
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第11话</i></span>惊恐的卡巴内</em>
									</a>
									<a href="#" class="list-group-item ">
										<em><span class="badge"><i>第12话</i></span>不明的夜晚</em>
									</a>
								</div>
							</div>
							<div class="tab-pane" id="list-part03">part03</div>
						</div>
						<!-- 标签内容结束 -->
					</div>
				</div>
				<!-- 集数部分 end -->
				<!-- 播放器部分 start-->
				<!-- <iframe width="100%" height=700 name=player frameborder=0 scrolling="no" src='http://mfjx.jiuli8.com/?url=http://bangumi.bilibili.com/anime/v/87797'></iframe> -->
				<!-- <div class="player-box">
					<iframe src="http://api.aikantv.cc/?url=http://www.bilibili.com/video/av2147573/" width="1140" height="700" id="iframeSon"></iframe>
				</div> -->
				<div class="player-box">
					
					<iframe src="../video.php?vid=01" width="1140" height="700" id="iframeSon" frameborder=0 scrolling="no" name="player"  marginheight="0" marginwidth"0"></iframe>
				</div>
				<!-- 播放器部分 end-->
			</div>
		</div>
		<!-- 主体内容 end -->
	</div>
	<!-- 页面主体 end -->
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




<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.nivo.slider.pack.js"></script>
<script src="../js/jquery-Color-animate-1.60.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/getVersion.js"></script>
<script>
$(document).ready(function(){
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
				$('.menu-item-list').hover(function(){
					$(this).css('overflow','visible');
					$(this).find('ul').css('height','100%');
					// $(this).find('ul').css('display','block');
					var subMenuItems = $(this).find('li');
					for(var i=0;i<subMenuItems.length;i++){
						subMenuItems[i].style.transition = 'transform '+(200*i+200)+'ms';
						subMenuItems[i].style.transform = 'rotateY(0deg)';
					}
				},function(){
					/*修复移动端bug*/
					$(document).on('tap',function(){
						$(this).css('overflow','hidden');
					})
					$(this).css('overflow','hidden');
					var subMenuItems = $(this).find('li');
					for(var i=0;i<subMenuItems.length;i++){
						subMenuItems[i].style.transition = 'transform '+(200*i+200)+'ms';
						subMenuItems[i].style.transform = 'rotateY(90deg)';
					}
					$(this).find('ul').css('height','0px');
				});
		}
		hoverJs();
		window.onresize = function(){
			var playerWidth = $('.player-box').width()
			$('iframe').width(playerWidth);
		}
		
    });      


	
</script>
</body>
</html>