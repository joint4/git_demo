<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<base  />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/SimplePinkIndex/css/news.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/SimplePinkIndex/css/plugmenu.css">
<script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/SimplePinkIndex/js/iscroll4.1.9.js"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
</head>
<body id="cate7">
<?php if(!empty($slideshow)): ?><div class="banner">
<div id="wrapper">
<div id="scroller">
<ul id="thelist">
<?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><p></p><a href="<?php echo ($vo["url"]); ?>" ><img src="<?php echo ($vo["img"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</div>

<div id="nav">
<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">&larr; prev</div>
<ul id="indicator">
<?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div id="next" onclick="myScroll.scrollToPage('next', 0,400,3);return false">next &rarr;</div>
</div>
<div class="clr"></div>
</div><?php endif; ?>

<?php if(!empty($category)): ?><ul class="cateul">
<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="li ">
<a href="<?php echo ($vo["url"]); ?>">
<div class="menubtn">
<div class="menuimg"><img src="<?php echo ($vo["icon"]); ?>" /></div>
<div class="menutitle"><?php echo ($vo["title"]); ?></div>
</div>
</a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="clr"></div>
</ul><?php endif; ?>

<script>
var count = document.getElementById("thelist").getElementsByTagName("img").length;	

for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";
}
 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

</script>

<div style="display:none"> </div>
 </body>
</html>