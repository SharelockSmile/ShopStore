<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "bookshop");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";
define("Admin_JS_URL","../Public/Admin/JS/");

$sqlOrder="select id,formid,total,vendee,taker,pay_method,del_method,formtime,tb_formstate.state as stateName,tb_form.state as sId
from tb_form,tb_formstate where tb_formstate.stateid=tb_form.state";
$resOrder=$db->ExecuteDQL($sqlOrder);
$smarty->assign("resOrder",$resOrder);

$smarty->display("showOrder.tpl");