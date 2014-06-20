<?php

namespace Addons\Wedding\Controller;

use Home\Controller\AddonsController;

class BlessingController extends AddonsController {
	var $model;
	var $Uid;

	function _initialize() {
		$this->model = $this->getModel ( 'wedding_blessing' );
		
		$param ['WeddingID'] = $this->WeddingID = intval ( $_REQUEST ['WeddingID'] );
		
		$res ['title'] = '婚庆客户';
		$res ['url'] = addons_url ( 'Wedding://Wedding/lists' );
		$res ['class'] = '';
		$nav [] = $res;
		
		$res ['title'] = '祝福列表';
		$res ['url'] = addons_url ( 'Wedding://Blessing/lists', $param );
		$res ['class'] = 'current';
		$nav [] = $res;
		
		$this->assign ( 'nav', $nav );
	}
	// 通用插件的列表模型
	public function lists() {
		$this->assign ( 'add_button', true );
		$this->assign ( 'search_button', true );
		$this->assign ( 'del_button', true );
		$this->assign ( 'check_all', true );
		
		
		$param ['WeddingID'] = $this->WeddingID;
		$param ['model'] = $this->model ['id'];
		$add_url = U ( 'add', $param );
		$this->assign ( 'add_url', $add_url );
	
		
		
		// 解析列表规则
		$data = $this->_list_grid ( $this->model );
		//dump ( $data );
		
		$this->assign ( $data );
		
		// 搜索条件
		$map = $this->_search_map ( $this->model, $data ['fields'] );
		
	    $map ['WeddingID'] = $this->WeddingID;
		//$data ['fields'] [] = 'sum(score) as total';
		
		$name = parse_name ( get_table_name ( $this->model ['id'] ), true );
		$list = M ( $name )->where ( $map )->field ( $data ['fields'] )->order ( 'id DESC' )->selectPage ();
// 		foreach ( $list ['list_data'] as &$vo ) {
// 		//	$member = get_memberinfo ( $vo ['uid'] );

// 			if (! empty ( $vo ['Photo'] ))
// 				$vo ['Photo'] = '<div class="upload-pre-item"  ><img src="' . get_picture_url ( $vo ['Photo'] ) . '" width="50" height="50" /></div>';
// // 			$vo ['truename'] = $member ['truename'];
// // 			$vo ['mobile'] = $member ['mobile'];
// // 			$vo ['score'] = $vo ['total'];
// 		}
		
		$this->assign ( $list );
		
		$this->display ();
	}
	
	//通用插件的增加模型
	public function add() {
		$_POST ['token'] = get_token ();
		//$this->model ['title']='titlasdf';
		if (IS_POST) {
			$Model = D ( parse_name ( get_table_name ( $this->model ['id'] ), 1 ) );
			// 获取模型的字段信息
			$Model = $this->checkAttr ( $Model, $this->model ['id'] );
			if ($Model->create () && $id = $Model->add ()) {
				$param ['WeddingID'] = $this->WeddingID;
				$param ['model'] = $this->model ['id'];
				$url = U ( 'lists', $param );
				$this->success ( '添加成功！', $url );
			} else {
				$this->error ( $Model->getError () );
			}
			exit ();
		}
		
		parent::common_add ( $this->model );
	}
	//前台添加祝福函数
	public function addBlessing() {
		
		//$this->model ['title']='titlasdf';
		if (IS_POST) {
			$_POST ['WeddingID'] =I('get.weddingid',0,'int');
			$Model = D ( parse_name ( get_table_name ( $this->model ['id'] ), 1 ) );
			// 获取模型的字段信息
			$Model = $this->checkAttr ( $Model, $this->model ['id'] );
			
			if ($Model->create () && $id = $Model->add ()) {
				$param ['WeddingID'] = $this->WeddingID;
				$param ['model'] = $this->model ['id'];
// 				$url = U ( 'lists', $param );
// 				$this->success ( '添加成功！', $url );
				echo "谢谢你的祝福！";
				
			}
			 else {
					echo "添加出错了！";
			}
			exit ();
		}
		return   "数据错误！";
	}
	
	
	public function edit() {
		
		$id = I ( 'id' );
		
		if (IS_POST) {
			$Model = D ( parse_name ( get_table_name ( $this->model ['id'] ), 1 ) );
			// 获取模型的字段信息
			$Model = $this->checkAttr ( $Model, $this->model ['id'] );
			if ($Model->create () && $Model->save ()) {
				$param ['WeddingID'] = $this->WeddingID;
				$param ['model'] = $this->model ['id'];
				$url = U ( 'lists', $param );
				$this->success ( '保存' . $this->model ['title'] . '成功！', $url );
			} else {
				$this->error ( $Model->getError () );
			}
		}
		
		parent::common_edit ( $this->model );
	}
	// 通用插件的删除模型
	public function del() {
		parent::common_del ( $this->model );
	}
}
