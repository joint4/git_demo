<?php

namespace Addons\Wedding\Controller;
use Home\Controller\AddonsController;

class WeddingController extends AddonsController{

	

	function wedding_photo() {
		$param ['WeddingID'] = I ( 'id', 0, 'intval' );
		$url = addons_url ( 'Wedding://Photo/lists', $param );
		// dump($url);
		//echo "<script>alert('".	$param ['marry_id']."')</script>";
		redirect ( $url );
	}
	function wedding_blessing() {
		$param ['WeddingID'] = I ( 'id', 0, 'intval' );
		$url = addons_url ( 'Wedding://Blessing/lists', $param );
		// dump($url);
		//echo "<script>alert('".	$param ['marry_id']."')</script>";
		redirect ( $url );
	}
	function wedding_dinner() {
		$param ['WeddingID'] = I ( 'id', 0, 'intval' );
		$url = addons_url ( 'Wedding://Dinner/lists', $param );
		// dump($url);
		//echo "<script>alert('".	$param ['marry_id']."')</script>";
		redirect ( $url );
	}

	public function lists() {

		parent::common_lists ( $this->model );
	}
	
	
	public function add() {
	
		is_array ( $model ) || $model = $this->getModel ( $model );
		if (IS_POST) {
			$_POST ['token'] = get_token ();
			
			$Model = D ( parse_name ( get_table_name ( $model ['id'] ), 1 ) );
			// 获取模型的字段信息
			$Model = $this->checkAttr ( $Model, $model ['id'] );
			if ($Model->create () && $id = $Model->add ()) {
				$this->_saveKeyword ( $model, $id );
		
				$this->success ( '添加' . $model ['title'] . '成功！', U ( 'lists?model=' . $model ['name'] ) );
			} else {
				$this->error ( $Model->getError () );
			}
		} else {
			$fields = get_model_attribute ( $model ['id'] );
				
			$this->assign ( 'fields', $fields );
			$this->meta_title = '新增' . $model ['title'];
				
			$templateFile || $templateFile = $model ['template_add'] ? $model ['template_add'] : '';
			$this->display ( $templateFile );
		}
	}
	
	function xitie($html = 'xitie') {
		$token=get_token ();
		$map ['id'] = $wedding_id = I ( 'id', 1, 'intval' );
		//$map ['token'] = get_token ();
		$info = M ( 'wedding' )->where ( $map )->find ();		
		if($token!=$info['token'])//判断当前用户的tonken是否正确
		{

			$this->display ( 'errorMsg' );
			exit;
		}
		
		$this->model = M ( 'Model' )->getByName ( $_REQUEST ['_controller'] );//获取数据模型信息

		
		$Pram["model"]=$this->model['id'];
	    $Pram["weddingid"]=$info['id'];		
		$post_addBlessing=addons_url ( 'Wedding://Blessing/addBlessing',$Pram );//添加祝福链接
		$this->assign ( 'post_addBlessing', $post_addBlessing );
		$post_addDinner=addons_url ( 'Wedding://Dinner/addDinner',$Pram );//赴宴链接
		
		$Pram["id"]=$info['id'];
		$this->assign ( 'post_addDinner', $post_addDinner );
		$url_photo=addons_url ( 'Wedding://Wedding/xiangce',$Pram );//婚纱照路径
		$this->assign ( 'url_photo', $url_photo );
		
		$this->assign ( 'info', $info );
		
	
		$this->display ( $html );
	}

}
