<?php
/* Smarty version 3.1.30, created on 2017-07-29 11:32:35
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\addPublics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597c01d3836340_70228330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1576aaa4a41696e7498f00a8f67ed972cd2d156b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\addPublics.tpl',
      1 => 1501299128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c01d3836340_70228330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--导入JQuery库文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
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
        background-color:darkgrey;
    }
    table tr th,table tr td
    {
        border: 1px solid #E8EAEB;
        text-align: center;
        font-size: 18px;
    }
</style>

<div id="Container_right">
    <form name="publicsForm" action="ProcessPublics.php" method="post">
        <table id="tab">
            <tr><th colspan="2"><h2>添加公告</h2></th></tr>
            <tr>
                <td>Title:</td>
                <td><input type="text" name="txtTitle"></td>
            </tr>
            <tr>
                <td>Content:</td>
                <td><textarea rows="15" cols="30" name="txtContent" style="resize: none"></textarea></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>
                    <input id="beginTime" name="addTime" type="text" onClick="WdatePicker()" >
                </td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="ADD"></td></tr>
        </table>
    </form>
</div><?php }
}
