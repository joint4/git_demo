

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wp_wedding
-- ----------------------------

INSERT INTO `wp_model` ( `name`, `title`, `extend`, `relation`, `need_pk`, `field_sort`, `field_group`, `attribute_list`, `template_list`, `template_add`, `template_edit`, `list_grid`, `list_row`, `search_key`, `search_list`, `create_time`, `update_time`, `status`, `engine_type`) VALUES ( 'wedding', '微婚庆', '0', '', '1', '{\"1\":[\"Num\",\"ClientType\",\"Bridegroom\",\"Bride\",\"BrideTel\",\"BridegroomTel\",\"Date\",\"Remark\",\"Keyword\",\"WechatTitle\",\"WechatPic\",\"WechatContent\",\"Address\",\"AddressX\",\"AddressY\",\"SummaryTitle\",\"WeddingSummary\",\"HotelTel\",\"WeddingPic\",\"QRcode\"]}', '1:基础', '', '', '', '', 'Num:客户编号\r\nKeyword:关键词\r\nClientType|get_name_by_status:客户类型\r\nBridegroom,Bride:客户名称\r\nDate|time_format:婚宴日期\r\nid:管理:wedding_blessing&id=[id]|查看祝福,wedding_dinner&id=[id]|赴宴统计\r\nid:操作:[EDIT]|编辑,[DELETE]|删除\r\n', '10', 'Num', '', '1397760380', '1398322581', '1', 'MyISAM');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Num', '客户编号', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397761534', '1397761192', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Bridegroom', '新郎姓名', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397761610', '1397761610', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Bride', '新娘姓名', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397761641', '1397761641', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'BrideTel', '新娘电话', 'varchar(25) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397761676', '1397761676', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('BridegroomTel', '新郎电话', 'varchar(25) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397762739', '1397761708', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'ClientType', '客户类型', 'char(50) NOT NULL', 'select', '', '', '1', '普通客户\r\n预约客户\r\nVIP客户', '0', '0', '1', '1397761847', '1397761847', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Remark', '备注', 'text NOT NULL', 'textarea', '', '', '1', '', '0', '0', '1', '1397761880', '1397761880', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'keyword', '关键词', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1398408924', '1397761913', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'WechatPic', '微信回复图片', 'int(10) UNSIGNED NOT NULL', 'picture', '', '', '1', '', '0', '0', '1', '1397761949', '1397761949', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'WechatTitle', '微信标题', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397761984', '1397761984', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'WechatContent', '微信回复内容', 'text NOT NULL', 'textarea', '', '', '1', '', '0', '0', '1', '1397762018', '1397762018', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Date', '婚宴日期', 'int(10) NOT NULL', 'datetime', '', '', '1', '', '0', '0', '1', '1397762071', '1397762071', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Address', '婚宴地址', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397762099', '1397762099', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('AddressX', 'X轴坐标', 'int(10) UNSIGNED NOT NULL', 'num', '', '', '1', '', '0', '0', '1', '1397762146', '1397762146', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'AddressY', 'Y轴坐标', 'int(10) UNSIGNED NOT NULL', 'num', '', '', '1', '', '0', '0', '1', '1397762166', '1397762166', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'WeddingSummary', '想说的话', 'text NOT NULL', 'textarea', '', '', '1', '', '0', '0', '1', '1398583660', '1397762229', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'HotelTel', '晚宴联系电话', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397762308', '1397762308', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'WeddingPic', '封面照片', 'int(10) UNSIGNED NOT NULL', 'picture', '', '', '1', '', '0', '0', '1', '1397762368', '1397762368', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'QRcode', '二维码参数', 'int(10) UNSIGNED NOT NULL', 'num', '', '', '1', '', '0', '0', '1', '1397762439', '1397762439', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('SummaryTitle', '想说的话标题', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397889603', '1397889603', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'token', 'Token', 'varchar(255) NOT NULL', 'string', '', '', '0', '', '0', '0', '1', '1398384757', '1398383839', '', '3', '', 'regex', '', '3', 'function');
UPDATE `wp_attribute` SET model_id= (SELECT MAX(id) FROM `wp_model`) WHERE model_id=0;

DROP TABLE IF EXISTS `wp_wedding`;
CREATE TABLE `wp_wedding` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `Num` varchar(255) NOT NULL COMMENT '客户编号',
  `Bridegroom` varchar(255) NOT NULL COMMENT '新郎姓名',
  `Bride` varchar(255) NOT NULL COMMENT '新娘姓名',
  `BrideTel` varchar(25) NOT NULL COMMENT '新娘电话',
  `BridegroomTel` varchar(25) NOT NULL COMMENT '新郎电话',
  `ClientType` char(50) NOT NULL COMMENT '客户类型',
  `Remark` text NOT NULL COMMENT '备注',
  `keyword` varchar(255) NOT NULL COMMENT '关键词',
  `WechatPic` int(10) unsigned NOT NULL COMMENT '微信回复图片',
  `WechatTitle` varchar(255) NOT NULL COMMENT '微信标题',
  `WechatContent` text NOT NULL COMMENT '微信回复内容',
  `Date` int(10) NOT NULL COMMENT '婚宴日期',
  `Address` varchar(255) NOT NULL COMMENT '婚宴地址',
  `AddressX` int(10) unsigned NOT NULL COMMENT 'X轴坐标',
  `AddressY` int(10) unsigned NOT NULL COMMENT 'Y轴坐标',
  `WeddingSummary` text NOT NULL COMMENT '想说的话',
  `HotelTel` varchar(255) NOT NULL COMMENT '晚宴联系电话',
  `WeddingPic` int(10) unsigned NOT NULL COMMENT '封面照片',
  `QRcode` int(10) unsigned NOT NULL COMMENT '二维码参数',
  `SummaryTitle` varchar(255) NOT NULL COMMENT '想说的话标题',
  `token` varchar(255) NOT NULL COMMENT 'Token',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;








 ----------------------------
-- Table structure for wp_wedding_blessing
-- ----------------------------

INSERT INTO `wp_model` (`name`, `title`, `extend`, `relation`, `need_pk`, `field_sort`, `field_group`, `attribute_list`, `template_list`, `template_add`, `template_edit`, `list_grid`, `list_row`, `search_key`, `search_list`, `create_time`, `update_time`, `status`, `engine_type`) VALUES ('wedding_blessing', '婚庆祝福墙', '0', '', '1', '{\"1\":[\"name\",\"content\",\"date\",\"weddingID\",\"tel\"]}', '1:基础', '', '', '', '', 'id:编号\r\nweddingID:婚庆ID\r\nname:姓名\r\ntel:电话\r\ncontent:内容\r\ndate:时间\r\nid:操作:[EDIT]|编辑,[DELETE]|删除\r\n', '10', '', '', '1397770222', '1398291594', '1', 'MyISAM');


INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'name', '姓名', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1397770285', '1397770285', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'content', '内容', 'text NOT NULL', 'textarea', '', '', '1', '', '0', '0', '1', '1397770313', '1397770313', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('tel', '电话', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1398291449', '1397770331', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('date', '时间', 'int(10) NOT NULL', 'datetime', '', '', '1', '', '0', '0', '1', '1397770348', '1397770348', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'WeddingID', '婚庆ID', 'int(10) UNSIGNED NOT NULL', 'num', '', '', '1', '', '0', '0', '1', '1398292796', '1397770378', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('token', 'Token', 'varchar(255) NOT NULL', 'string', '', '', '0', '', '0', '0', '1', '1398384703', '1398383938', '', '3', '', 'regex', '', '3', 'function');
UPDATE `wp_attribute` SET model_id= (SELECT MAX(id) FROM `wp_model`) WHERE model_id=0;

DROP TABLE IF EXISTS `wp_wedding_blessing`;
CREATE TABLE `wp_wedding_blessing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `content` text NOT NULL COMMENT '内容',
  `tel` varchar(255) NOT NULL COMMENT '电话',
  `date` int(10) NOT NULL COMMENT '时间',
  `WeddingID` int(10) unsigned NOT NULL COMMENT '婚庆ID',
  `token` varchar(255) NOT NULL COMMENT 'Token',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


-- ----------------------------
-- Table structure for wp_wedding_dinner
-- ----------------------------


INSERT INTO `wp_model` (`name`, `title`, `extend`, `relation`, `need_pk`, `field_sort`, `field_group`, `attribute_list`, `template_list`, `template_add`, `template_edit`, `list_grid`, `list_row`, `search_key`, `search_list`, `create_time`, `update_time`, `status`, `engine_type`) VALUES ( 'wedding_dinner', '婚庆赴宴统计', '0', '', '1', '{\"1\":[\"WeddingID\",\"name\",\"memberCount\",\"remark\",\"tel\"]}', '1:基础', '', '', '', '', 'id:编号\r\nWeddingID:婚庆ID\r\nname:姓名\r\ntel:电话\r\nmemberCount:人数\r\nremark:备注', '10', 'name', '', '1398321793', '1398322702', '1', 'MyISAM');

INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('WeddingID', '婚宴ID', 'int(10) UNSIGNED NOT NULL', 'num', '', '', '1', '', '0', '0', '1', '1398321837', '1398321837', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('name', '来宾名称', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1398321864', '1398321864', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('memberCount', '来宾人数', 'int(10) UNSIGNED NOT NULL', 'num', '', '', '1', '', '0', '0', '1', '1398321926', '1398321926', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('remark', '备注', 'text NOT NULL', 'textarea', '', '', '1', '', '0', '0', '1', '1398321965', '1398321965', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('tel', '手机', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '0', '0', '1', '1398322001', '1398322001', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('token', 'Token', 'varchar(255) NOT NULL', 'string', '', '', '0', '', '0', '0', '1', '1398384684', '1398383877', '', '3', '', 'regex', '', '3', 'function');
UPDATE `wp_attribute` SET model_id= (SELECT MAX(id) FROM `wp_model`) WHERE model_id=0;

DROP TABLE IF EXISTS `wp_wedding_dinner`;
CREATE TABLE `wp_wedding_dinner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `WeddingID` int(10) unsigned NOT NULL COMMENT '婚宴ID',
  `name` varchar(255) NOT NULL COMMENT '来宾名称',
  `memberCount` int(10) unsigned NOT NULL COMMENT '来宾人数',
  `remark` text NOT NULL COMMENT '备注',
  `tel` varchar(255) NOT NULL COMMENT '手机',
  `token` varchar(255) NOT NULL COMMENT 'Token',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

