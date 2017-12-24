<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "bookshop");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

define("Admin_CSS_URL","../Public/Admin/CSS/");
define("Admin_IMAGE_URL","../Public/Images/");
define("Admin_JS_URL","../Public/Admin/JS/");

//查询目录
$firstSQL="SELECT * FROM tb_menu WHERE parentId=0";
$firstMenu=$db->ExecuteDQL($firstSQL);
$smarty->assign("firstMenu",$firstMenu);
$secondSQL="SELECT * FROM tb_menu WHERE parentId<>0";
$secongMeun=$db->ExecuteDQL($secondSQL);
$smarty->assign("secondMenu",$secongMeun);

$smarty->display("Left.tpl");