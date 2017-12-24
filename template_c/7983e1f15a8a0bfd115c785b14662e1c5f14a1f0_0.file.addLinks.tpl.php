<?php
/* Smarty version 3.1.30, created on 2017-09-04 14:02:10
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\addLinks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59acec62d61266_41583076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7983e1f15a8a0bfd115c785b14662e1c5f14a1f0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\addLinks.tpl',
      1 => 1501500503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59acec62d61266_41583076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--导入JQuery库文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
addLinks.js"><?php echo '</script'; ?>
>

<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 60%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color:#b9c9ef;
    }
    table tr th,table tr td
    {
        border: 1px solid #E8EAEB;
        text-align: center;
        font-size: 18px;
    }
</style>

<div id="Container_right">
    <form name="publicsForm" action="ProcessLink.php" method="post">
        <table id="tab">
            <tr><th colspan="2"><h2>添加链接</h2></th></tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="txtName" id="txtName"></td>
            </tr>
            <tr>
                <td>URL(必须以http://或https://开头):</td>
                <td><input type="text" name="txtURL" id="txtURL"></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="ADD" id="addLinks"></td></tr>
        </table>
    </form>
</div><?php }
}
