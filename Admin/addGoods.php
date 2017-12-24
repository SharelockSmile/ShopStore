<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

define("Admin_JS_URL","../Public/Admin/JS/");
define("Admin_IMAGE_URL","../Public/Images/");


$smarty->display("addGoods.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 22:14
 */