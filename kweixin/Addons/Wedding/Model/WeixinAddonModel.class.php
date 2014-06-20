<?php
        	
namespace Addons\Wedding\Model;
use Home\Model\WeixinModel;
        	
/**
 * Wedding的微信模型1
 */
class WeixinAddonModel extends WeixinModel{

	function reply($dataArr, $keywordArr = array()) {	
		
	$token=	$map['token'] = get_token();
	$weddingID=0;
		if (! empty ( $keywordArr ['aim_id'] )) 
		{
			$weddingID=$map ['id'] = $keywordArr ['aim_id'];
		}
		
		$info = M ( 'wedding' )->where ( $map )->find ();//获取客户信息
		
		$param ['token'] =$token;
		$param ['openid'] = get_openid ();
		$param ['id'] =$weddingID;
		$url = addons_url ( 'Wedding://Wedding/xitie', $param );
		$articles [0] = array (
				'Title' => $info['WechatTitle'],
				'Description' => $info['WechatContent'],
				'PicUrl' => get_picture_url($info['WechatPic']),
				'Url' => $url
		);
	
		
		$res = $this->replyNews ( $articles );
	}  	

	// 关注公众号事件
	public function subscribe() {
		return true;
	}
	
	// 取消关注公众号事件
	public function unsubscribe() {
		return true;
	}
	
	// 扫描带参数二维码事件
	public function scan() {
		return true;
	}
	
	// 上报地理位置事件
	public function location() {
		return true;
	}
	
	// 自定义菜单事件
	public function click() {
		//$res = $this->replyText ( '234234' );
	
	
	}	
}
        	