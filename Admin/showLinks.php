<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

$sqlLinks="SELECT * FROM tb_links;";
$resLinks=$db->ExecuteDQL($sqlLinks);
$smarty->assign("arrLinks",$resLinks);
$smarty->display("showLinks.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/29
 * Time: 12:08
 */