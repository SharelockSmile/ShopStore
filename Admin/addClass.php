<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";
define("Admin_JS_URL","../Public/Admin/JS/");

$slqClass="SELECT *FROM tb_class WHERE supid=0";
$resClass=$db->ExecuteDQL($slqClass);
$smarty->assign("resClass",$resClass);

$smarty->display("addClass.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/31
 * Time: 12:20
 */