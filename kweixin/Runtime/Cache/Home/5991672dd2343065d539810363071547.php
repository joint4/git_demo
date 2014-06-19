<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/kweixin/Public/Home/css/font-awesome.css?v=<?php echo SITE_VERSION;?>" media="all">
	<link rel="stylesheet" type="text/css" href="/kweixin/Public/Home/css/mobile_module.css?v=<?php echo SITE_VERSION;?>" media="all">
    <script type="text/javascript" src="/kweixin/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/kweixin/Public/Home/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="/kweixin/Public/Home/js/m/dialog.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="/kweixin/Public/Home/js/m/flipsnap.min.js"></script>
    <script type="text/javascript" src="/kweixin/Public/Home/js/m/mobile_module.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="/kweixin/Public/Home/js/admin_common.js?v=<?php echo SITE_VERSION;?>"></script>
	<title><?php echo C('WEB_SITE_TITLE');?></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="weiphp 微信公众平台开发框架">
    <meta name="Description" content="weiphp 微信公众平台开发框架">
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" href="<?php echo SITE_URL;?>/favicon.ico">
</head>	
<link href="<?php echo ADDON_PUBLIC_PATH;?>/card.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">

<body>
	<div id="container" class="container body">
        <h5 class="page_title top_line">最新通知</h5>
    	<ul class="toggle_list" style="margin-top:50px">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="single_item m_15 p_10">
            	<div class="title icon_arrow_right">
                	<img width="30" class="fl mr_10" src="/kweixin/Public/Home/images/m/pic_card.png"/>
                	<p><strong><?php echo ($vo["title"]); ?></strong></p>
                </div>
                <div class="content">
                <p>发布时间：<?php echo (time_format($vo["cTime"])); ?></p>
                	<p><?php echo (htmlspecialchars_decode($vo["content"])); ?></p>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>   	
        <?php if(empty($list)): ?><div class="empty_default">
            	<p><img src="<?php echo ADDON_PUBLIC_PATH;?>/vip_card_gray.png"/><br/>会员卡目前还没通知~</p>
            </div><?php endif; ?>
        <p class="copyright"><?php echo ($system_copy_right); ?></p>
        <nav class="bottom_nav">
            <a class="icon_card" href="<?php echo addons_url('Card://Card/showCard');?>">会员卡</a>
        <!--        <a class="icon_crown" href="<?php echo addons_url($_REQUEST ['_addons'].'://'.$_REQUEST ['_controller'].'/introduction');?>">特权</a>-->
            <a class="icon_time cur" href="<?php echo addons_url('Card://notice/show');?>">最新通知</a>
            <a class="icon_tag" href="<?php echo addons_url('Card://coupons/show');?>">优惠券</a>
        <!--        <a class="icon_gift" href="<?php echo addons_url($_REQUEST ['_addons'].'://'.$_REQUEST ['_controller'].'/exchange');?>">兑换</a>
            <a class="icon_time" href="<?php echo addons_url($_REQUEST ['_addons'].'://'.$_REQUEST ['_controller'].'/score');?>">签到</a>-->
        </nav>
        <div class="bottom_nav_blank"></div>       
    </div>
</body>
<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script>
</html>