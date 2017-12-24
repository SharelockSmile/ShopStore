<?php
/* Smarty version 3.1.30, created on 2017-07-31 19:01:33
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\addGoods.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f0e0d1919f1_58683595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b6c9a8a5f4a4dd8df49292bf7f2d2567e9cf7a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\addGoods.tpl',
      1 => 1501255058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f0e0d1919f1_58683595 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="Container_right">
    <form name="goodsForm" method="post" action="ProcessGoods.php">
        <table>
            <tr><th><h2>添加商品</h2></th></tr>
            <tr>
                <td>商品名：</td>
                <td><input type="text"></td>
            </tr>
        </table>
    </form>
</div><?php }
}
