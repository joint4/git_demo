<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>微相册</title>
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/photo.css" media="screen" rel="stylesheet" type="text/css">
  </head>
  <body>
    
    <style>  
  body{background: #eee;}
  .header{background: url(/assets/wphoto/top.jpg) no-repeat left top; background-size: 100% auto; height: 90px; box-shadow: 0 5px 10px rgba(0,0,0,0.25); line-height: 90px;}
  .header img{max-height: 36px; margin-left: 20px;}
  .index-photo{display: block; margin: 36px 10px 46px 26px; border: 1px solid #ccc; border-radius: 5px; background: #fff; padding: 5px 10px 5px 150px; position: relative; height: 70px;}
 
  .photo-img p{width: 100%; height: 100%; overflow: hidden;}
  .photo-img img{width: 100%; min-height: 100%;}
  .photo-img em{border-radius: 0 2px 2px 0; border:1px solid #6279b7; background: #778dca; color: #fff; font-style:normal; width: 16px; height: 40px; display: block; text-align: center; line-height: 16px; padding: 4px 0 0 0; position: absolute; bottom: 8px; right: -8px; font-size: 12px;}
  .photo-text p{display: block; overflow: hidden;}
  .photo-text p small,
  .photo-text p span{color: #999; font-size: 12px;display: block;overflow: hidden; text-overflow: ellipsis;white-space: nowrap;max-height: 20px; line-height: 20px;}
  .photo-text p small{ float: left; width: 50%;}
  .photo-text p span{float: right; text-align: right; width: 40%;}
  .photo-text p b{color: #333; display: block; line-height: 20px; max-height: 40px;}
</style>

<div class="html" id="html">
  <div class="stage" id="stage">
    <section id="sec-index">
      <div class="header">
        <img alt="Top-text" src="<?php echo ADDON_PUBLIC_PATH;?>/top-text.png">
      </div>
      <div class="body">
		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('photoView?pid='.$vo['id']);?>" class="index-photo">
			  <div class="photo-img">
				<p><img alt="<?php echo ($vo["title"]); ?>" src="<?php echo (get_cover_url($vo["cover"])); ?>"></p>
				<em>相册</em>
			  </div>
			  <div class="photo-text">
				<p>
				  <small><?php echo ($vo["cTime"]); ?></small>
				</p>
				<p>
				  <b><?php echo ($vo["title"]); ?></b>
				</p>
			  </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>

      </div>
    </section><!--main section end -->
  </div><!--.stage end-->
</div><!--.html end-->

        <footer>
      技术支持：金狐科技☏400-167-2898
    </footer>
 
</body></html>