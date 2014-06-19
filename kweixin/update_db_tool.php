<?php
if (! defined ( 'IN_WEIPHP_ADMIN' )) {
	echo '该文件不能直接通过地址访问执行，请进入: 后台》系统》在线升级 的页面里点击“升级数据库”按钮即可';
	exit ();
}
set_time_limit ( 0 );
$prefix = C ( 'DB_PREFIX' );

$config_map ['name'] = 'SYSTEM_UPDATRE_VERSION';
$res = M ( 'config' )->where ( $config_map )->getField ( 'value' );

if ($res < 20140605) {
	$this->error ( '该补丁包需要先升级到6月05号发布补丁包版本再升级' );
	exit ();
}

$models = M ( 'model' )->field ( 'id,name' )->select ();
foreach ( $models as $m ) {
	$model_ids [$m ['name']] = $m ['id'];
}

$sqlArr [] = "ALTER TABLE `" . $prefix . "custom_reply_news` ADD COLUMN `jump_url`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '外链' AFTER `token`";
$sqlArr [] = "ALTER TABLE `" . $prefix . "extensions` ADD COLUMN `token`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Token' AFTER `keyword`";
$sqlArr [] = "ALTER TABLE `" . $prefix . "keyword` ADD COLUMN `request_count`  int(10) NOT NULL DEFAULT 0 COMMENT '请求数' AFTER `extra_int`";
$sqlArr [] = "ALTER TABLE `" . $prefix . "weixin_log` ENGINE=MyISAM,ROW_FORMAT=Dynamic";
foreach ( $sqlArr as $sql ) {
	$res = M ()->execute ( $sql );
// 	dump ( $res );
// 	dump ( $sql );
}

$modelArr = array (
		'keyword' => array (
				'list_grid' => "id:编号\r\nkeyword:关键词\r\naddon:所属插件\r\naim_id:插件数据ID\r\ncTime|time_format:增加时间\r\nrequest_count|intval:请求数\r\nid:操作:[EDIT]|编辑,[DELETE]|删除" 
		) 
);
foreach ( $modelArr as $name => $save ) {
	$res = M ( 'model' )->where ( "name='$name'" )->save ( $save );
// 	dump ( $res );
// 	lastsql ();
}

$insertArr = array (
		'extensions' => ' (\'token\',\'Token\',\'varchar(255) NOT NULL\',\'string\',\'\',\'\',\'0\',\'\',\'{$model_id}\',\'0\',\'1\',\'1402454223\',\'1402454223\',\'\',\'3\',\'\',\'regex\',\'get_token\',\'1\',\'function\'),',
		'custom_reply_news' => ' (\'jump_url\',\'外链\',\'varchar(255) NOT NULL\',\'string\',\'\',\'如需跳转填写网址(记住必须有http://)如果填写了图文详细内容，这里请留空，不要设置！\',\'1\',\'\',\'{$model_id}\',\'0\',\'1\',\'1402482073\',\'1402482073\',\'\',\'3\',\'\',\'regex\',\'\',\'3\',\'function\'),' 
);
foreach ( $insertArr as $model_name => $val ) {
	$val = str_replace ( '{$model_id}', $model_ids [$model_name], $val );
	$val = trim ( $val, ',' );
	$sql = 'INSERT INTO ' . $prefix . "attribute (`name`,`title`,`field`,`type`,`value`,`remark`,`is_show`,`extra`,`model_id`,`is_must`,`status`,`update_time`,`create_time`,`validate_rule`,`validate_time`,`error_info`,`validate_type`,`auto_rule`,`auto_time`,`auto_type`) VALUES $val";
	$res = M ()->execute ( $sql );
// 	dump ( $res );
// 	lastsql ();
}

$updateArr = array (
		'member_public' => array (
				'token' => array (
						'validate_type' => 'regex' 
				),
				'public_id' => array (
						'remark' => '请正确填写，保存后不能再修改，且无法接收到微信的信息',
						'error_info' => '公众号原始ID已经存在，请不要重复增加',
						'validate_type' => 'unique' 
				) 
		),
		'forms' => array (
				'jump_url' => array (
						'remark' => '要以http://开头的完整地址，为空时不跳转' 
				) 
		),
		'keyword' => array (
				'request_count' => array (
						'remark' => '用户回复的次数' 
				) 
		) 
);
foreach ( $updateArr as $model_name => $fields ) {
	$val = str_replace ( '{$model_id}', $model_ids [$model_name], $val );
	unset ( $map );
	$map ['model_id'] = $model_ids [$model_name];
	foreach ( $fields as $f => $v ) {
		$map ['name'] = $f;
		$res = M ( 'attribute' )->where ( $map )->save ( $v );
// 		dump ( $res );
// 		lastsql ();
	}
}

$token = M ( 'member_public' )->order ( 'is_use desc' )->getField ( 'token' );
$res = M ( 'extensions' )->where ( 'id>0' )->setField ( 'token', $token );

// exit ();
// 更新本地版本号
$res = M ( 'config' )->where ( $config_map )->setField ( 'value', 20140611 );
S ( 'DB_CONFIG_DATA', null );

$this->success ( '操作完成' );