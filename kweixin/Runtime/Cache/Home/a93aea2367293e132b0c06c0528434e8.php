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
	<div class="container body">
        <h5 class="page_title top_line">会员卡使用介绍</h5>
    	<ul class="toggle_list" style="margin-top:50px">
        	<li class="single_item m_15 p_10 toggle_list_open">
            	<div class="title icon_arrow_right">
                	<img width="30" class="fl mr_10" src="/kweixin/Public/Home/images/m/pic_card.png"/>
                	<p><strong>会员卡使用说明</strong></p>
                </div>
                <div class="content">
                	<p><?php echo ($config["instruction"]); ?></p>
                </div>
            </li>
        </ul>
    	
        <p class="copyright">2014&copy;WeiPHP</p>
    </div>
</body>
</html>