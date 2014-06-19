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
        <div class="p_10"> 
            <div class="vipcard_content">
                <div class="card" style="background-image:url(<?php echo ($config["background_url"]); ?>);">
                    <span class="card_name"><?php echo ($config["title"]); ?></span>
                    <!--<span class="card_num">卡号：<?php echo ($config["length"]); ?></span>-->
                    <div class="card_mask"></div>
                </div>
                <div class="card_info">
                    <div class="tb"><a href="<?php echo addons_url('Card://Card/writeCardInfo');?>" class="btn m_15 flex_1">点击领取会员卡</a></div>
                    <p class="m_15 gray_txt"><center>微信会员卡时代</center></p>
                    <div class="single_item m_15">
                        <a class="p_10 arrow_icon mr_10" href="<?php echo addons_url('Card://Card/introduction');?>" >会员卡使用说明</a>
<!--                        <div class="single_item_line"></div>
                        <a class="p_10 arrow_icon mr_10" href="<?php echo addons_url($_REQUEST ['_addons'].'://'.$_REQUEST ['_controller'].'/storeList');?>" target="_blank">适用门店电话及地址</a>-->
                    </div>
                    <div class="single_item m_15">
                        <a class="p_10 arrow_icon mr_10" href="http://api.map.baidu.com/marker?location=31.308707,121.523804&title=<?php echo ($config["address"]); ?>&name=<?php echo ($config["address"]); ?>&content=<?php echo ($config["address"]); ?>&output=html&src=weiphp">地址：<?php echo ($config["address"]); ?></a>
                        <div class="single_item_line"></div>
                        <a class="p_10 arrow_icon mr_10" href="tel:13155333122">电话：<?php echo ($config["phone"]); ?></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <p class="copyright"><?php echo ($system_copy_right); ?></p>
    </div>
    
</body>
<script type="text/javascript">
		if($('#select_background').val()==11){
			var cardBgUrl = $("#hidden_background_custom").val();
		}else{
			var cardBgUrl = '<?php echo ADDON_PUBLIC_PATH;?>/card_bg_'+$('#select_background').val()+".png";

		}	
		$('#cardBg').attr("href",cardBgUrl);
</script>
</html>