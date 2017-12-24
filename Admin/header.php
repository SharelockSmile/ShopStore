<?php
include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";
define("Admin_IMAGE_URL","../Public/Images/");
$smarty->display("header.tpl");
?>
