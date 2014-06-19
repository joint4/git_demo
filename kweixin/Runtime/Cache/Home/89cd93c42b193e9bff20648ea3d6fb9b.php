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
<link href="<?php echo ADDON_PUBLIC_PATH;?>/Coupon.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
<body id="scratch">
	<div class="container body">
    	<div class="scr_top">
        	<img src="<?php echo ADDON_PUBLIC_PATH;?>/top.jpg"/>
        </div>
        <div class="block_out">
        	<div class="block_inner">
            	<h6>优惠券信息</h6>
                <p>优惠券：<?php echo ($data["title"]); ?><br/>
                SN码&nbsp;&nbsp;：<?php echo ($sn["sn"]); ?><br/>
                状 态&nbsp;&nbsp;：<?php if(($sn["is_use"]) == "1"): ?>已使用<?php else: ?>未使用<?php endif; ?><br/>
                有效期：<?php echo (time_format($data["start_time"])); ?> 至 <?php echo (time_format($data["start_time"])); ?>
                </p>
            </div>
        </div>
        <div class="block_out">
        	<div class="block_inner">
            	<h6>使用说明</h6>
                <p><?php echo ($data["use_tips"]); ?></p>
            </div>
        </div>
        <div class="block_out">
        	<div class="block_inner">
            	<h6>领取条件</h6>
                <p>
                <?php if(is_array($condition)): $i = 0; $__LIST__ = $condition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($key+1); ?>、<?php echo ($vo); ?> <br/><?php endforeach; endif; else: echo "" ;endif; ?>
</p>
            </div>
        </div>
        <p class="copyright"><?php echo ($system_copy_right); ?></p>
        </div>
    </div>
<script type="text/javascript">     
(function(bodyStyle){         
	bodyStyle.mozUserSelect = 'none';         
	bodyStyle.webkitUserSelect = 'none';           
	var img = new Image();         
	var canvas = $('canvas');         
	canvas.css({'background-color':'transparent','background-image':'url('+img.src+')'});           
	img.addEventListener('load',function(e){  
		var ctx;
		var w = img.width, h = img.height;             
		var offsetX = canvas.offset().left, offsetY =  canvas.offset().top;             
		var mousedown = false;               
		function layer(ctx){                 
			ctx.fillStyle = 'gray';                 
			ctx.fillRect(0, 0, w, h);             
		}   
		function eventDown(e){                 
			e.preventDefault();                 
			mousedown=true;             
		}   
		function eventUp(e){                 
			e.preventDefault();                 
			mousedown = false;
			var data=ctx.getImageData(0,0,w,h).data;
			for(var i=0,j=0;i<data.length;i+=4){
				if(data[i] && data[i+1] && data[i+2] && data[i+3]){
					j++;
				}
			}
			console.log(j+"=="+(w*h));
			if(j<=w*h*0.7){
				if(true){
					//填充中奖信息
					//中奖
					openSuccessDialog();
					}else{
						openErrorDialog
						}
			}             
		}               
		function eventMove(e){                 
			e.preventDefault();                 
			if(mousedown){                     
				if(e.changedTouches){                         
					e=e.changedTouches[e.changedTouches.length-1];                     
				}                     
				var x = (e.clientX + document.body.scrollLeft || e.pageX) - offsetX || 0,                         
				y = (e.clientY + document.body.scrollTop || e.pageY) - offsetY || 0;  
				//console.log(offsetX+"=="+x);                 
				with(ctx){                    
					beginPath()                     
					arc(x, y, 5, 0, Math.PI * 2);                         
					fill();                     
				}                
			}             
		}               
		canvas.width=w;             
		canvas.height=h;    
		canvas.css({'background-image':'url('+img.src+')'});                
		ctx=canvas[0].getContext('2d');             
		ctx.fillStyle='transparent';             
		ctx.fillRect(0, 0, w, h);             
		layer(ctx);               
		ctx.globalCompositeOperation = 'destination-out';               
		canvas[0].addEventListener('touchstart', eventDown);             
		canvas[0].addEventListener('touchend', eventUp);             
		canvas[0].addEventListener('touchmove', eventMove);             
		canvas[0].addEventListener('mousedown', eventDown);             
		canvas[0].addEventListener('mouseup', eventUp);             
		canvas[0].addEventListener('mousemove', eventMove);       
	});
	
	img.src = '<?php echo ADDON_PUBLIC_PATH;?>/1.jpg';

})(document.body.style);    
function openSuccessDialog(){
	var successHtml = "<div class='common_dialog lqcg'>"
		+"<h6>你的运气太好了！</h6><p class='p_10'>你获得了精美礼物一份，请联系客服领取。</p>"
		+"<div class='tb'><a class='btn m_15 flex_1' href='#'>去领取</a></div>"
		+"</div>"
		$.Dialog.open(successHtml);
	}
function openErrorDialog(){
	var successHtml = "<div class='common_dialog lqcg'>"
		+"<h6>很抱歉！没有中奖，还需继续努力</h6><p class='p_10'>你还有10次机会。</p>"
		+"<div class='tb'><a class='btn m_15 flex_1' href='#'>再刮一次</a></div>"
		+"</div>"
		$.Dialog.open(successHtml);
	}
</script>	
</body>
</html>