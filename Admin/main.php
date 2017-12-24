<?php
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "bookshop");
$db->connet_DB();

include_once '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

define("Admin_CSS_URL","../Public/Admin/CSS/");
define("Admin_IMAGE_URL","../Public/Images/");
define("Admin_JS_URL","../Public/Admin/JS/");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>乐GO书城</title>
</head>
<frameset rows="150,900,120" cols="1200" scrolling="no" frameborde="no"  >
    <frame src="header.php" scrolling="no"/>
    <frameset rows="*" cols="20%,80%" frameborde="0" scrolling="no"  framespacing="0">
        <frame src="Left.php" scrolling="no"/>
        <frame src="showOrder.php" name="frameRight"/>
    </frameset>
    <frame src="bottom.php" scrolling="no"/>
</frameset>
</html>