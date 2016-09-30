<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>video</title>
    <style>
        body{margin:0; padding: 0;}
        .player-box{ width: 1140px; height: 740px; position: absolute;left: 0;top: 0;}
        .iframeSon{ position: relative; left: -2px;}
        @media screen and (max-width:980px){
            .player-box{ width: 100%; }
        }
    </style>
</head>
<body>
<div class="player-box">
    <iframe class="iframeSon" src="<?php echo ($src); ?>" width="1140" height="740" id="iframeSon" frameborder=0 scrolling="no"  marginheight="0" marginwidth="0"></iframe>
</div>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script>
    window.onload = function() {

        window.onresize = function(){
            var playerWidth = $('.player-box').width();
            $('iframe').width(playerWidth);
        }
    };
</script>
</body>
</html>