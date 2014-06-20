<?php

namespace Addons\Wedding;
use Common\Controller\Addon;

/**
 * 微婚庆插件
 * @author 肥仔聪要淡定
 */

    class WeddingAddon extends Addon{

        public $info = array(
            'name'=>'Wedding',
            'title'=>'微喜帖',
            'description'=>'婚庆行业的微信解决方案',
            'status'=>1,
            'author'=>'肥仔聪要淡定',
            'version'=>'0.1',
            'has_adminlist'=>1,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/Wedding/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Wedding/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }