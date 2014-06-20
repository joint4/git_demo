DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='wedding' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='wedding' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp_wedding`;

DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='wedding_blessing' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='wedding_blessing' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp_wedding_blessing`;

DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='wedding_dinner' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='wedding_dinner' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp_wedding_dinner`;