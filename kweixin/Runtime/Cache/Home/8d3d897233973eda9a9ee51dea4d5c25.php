<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo ADDON_PUBLIC_PATH;?>/photo1.css?2014-03-07-1" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo ADDON_PUBLIC_PATH;?>/photoswipe.css?2014-03-07-1" media="all" />
		<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/jQuery.js?2014-03-07-1"></script>
		<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/jquery_imagesloaded.js?2014-03-07-1"></script>
		<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/jquery_wookmark_min.js?2014-03-07-1"></script>
		<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/klass_min.js?2014-03-07-1"></script>
		<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/code_photoswipe_min.js?2014-03-07-1"></script>
		<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/jquery_lazyload.js?2014-03-07-1"></script>
		<title>相册</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
         <!-- Mobile Devices Support @begin -->
		<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
		<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
		<meta content="no-cache" http-equiv="pragma">
		<meta content="0" http-equiv="expires">
		<meta content="telephone=no, address=no" name="format-detection">
		<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
       <!-- <link rel="shortcut icon" href="<?php echo ADDON_PUBLIC_PATH;?>/favicon.ico" />-->
        <style>
            img{max-width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
        
<body id="photo" ondragstart="return false;" onselectstart="return false;">
	<script type="text/javascript">
		(function(window){
			document.addEventListener('DOMContentLoaded', function(){
				var PhotoSwipe = window.Code.PhotoSwipe;
				var options = {loop:false},
				instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			}, false);
			})(window);
	</script>
	<div class="body">
	<!--相册LOGO	
	
	<div class="qiandaobanner">
			<a href="#">
				<img src="<?php echo ADDON_PUBLIC_PATH;?>/albums_head_url.jpg" alt="" style="max-height:200px;"/>
			</a>
		</div>
		
    -->
		<div id="main" role="main">
		      <ul id="Gallery" class="gallery">
		    
		      <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="">
		      <a href="<?php echo (get_cover_url($vo["pic"])); ?>">
		        		<img src="<?php echo (get_cover_url($vo["pic"])); ?>" alt="<?php echo ($vo["intro"]); ?>">
		        	</a>
		        	   </li><?php endforeach; endif; else: echo "" ;endif; ?>
		

		      </ul>
		</div>
	</div>
	<footer style="text-align:center; color:#ffd800;margin-right:20px;margin-top:0px;"><a href="#">©金狐网络科技china提供技术支持</a></footer>
<!--下面是瀑布流js-->
<script type="text/javascript">
    (function ($){
      $('#Gallery').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 4, // Optional, the distance between grid items
          itemWidth: 150 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#Gallery li');
        // Call the layout function.
        handler.wookmark(options);
      });
    })(jQuery);
  </script>
</body>        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	</body>
	
<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/ChatFloat.js"></script>
<script type="text/javascript">
var str_domain = location.href.split('/',4)[2];
var boolIsTest = false;
if(str_domain == 'wechat.goldfoxchina.net'){
	boolIsTest = false;
}
new ChatFloat({
        AId: '118274',
        openid: "",
		top:150,
		right:0,
		IsTest:boolIsTest
});
</script>
</html>