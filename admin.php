<?php
//单入口模式
define('THINK_PATH', './inc/');
define('APP_NAME', 'admin');
define('APP_PATH', './admin/');

/**
 * 系统调试设置
 * 项目正式部署后请设置为false
 */
define('APP_DEBUG', 'true');
require(THINK_PATH."/ThinkPHP.php");

?>