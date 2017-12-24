<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

$sqlAdmin="SELECT id,`name` FROM tb_admin";
$resAdmin=$db->ExecuteDQL($sqlAdmin);
$smarty->assign("arrAdmin",$resAdmin);
$smarty->display("showAdmin.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 22:24
 */