<?php
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "bookshop");
$db->connet_DB();

include_once '../System/smartyConf.php';
$smarty->template_dir="../templates/Home";
$smarty->compile_dir="../template_c";

define("HOME_CSS_URL","../Public/Home/CSS/");
define("HOME_IMAGE_URL","../Public/Images/");
define("HOME_JS_URL","../Public/Home/JS/");

$smarty->display("index.tpl");