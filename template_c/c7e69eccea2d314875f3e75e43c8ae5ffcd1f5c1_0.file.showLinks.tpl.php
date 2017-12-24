<?php
/* Smarty version 3.1.30, created on 2017-07-31 19:03:36
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\showLinks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f0e88dc1d52_13679893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e69eccea2d314875f3e75e43c8ae5ffcd1f5c1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\showLinks.tpl',
      1 => 1501460978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f0e88dc1d52_13679893 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 70%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color:#6ce26c;
    }
    table tr th,table tr td
    {
        border: 1px solid burlywood;
        text-align: center;
        font-size: 18px;
    }
</style>
<div id="Container_right">
    <table>
        <tr><th colspan="2"><h2>链接信息表</h2></th></tr>
        <tr>
            <th>Name</th>
            <th>URL</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrLinks']->value, 'Links');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Links']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['Links']->value["name"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Links']->value["url"];?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</div><?php }
}
