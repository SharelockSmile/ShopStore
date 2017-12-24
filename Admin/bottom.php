<?php
//包含数据库文件即连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "bookshop");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
define("Admin_IMAGE_URL","../Public/Images/");
$smarty->compile_dir="../template_c";

$smarty->display("bottom.tpl");