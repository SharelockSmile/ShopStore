<?php
include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";
define("Admin_JS_URL","../Public/Admin/JS/");

$smarty->display("addPublics.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 23:11
 */