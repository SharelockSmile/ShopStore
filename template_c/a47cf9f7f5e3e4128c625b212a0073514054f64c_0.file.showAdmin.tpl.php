<?php
/* Smarty version 3.1.30, created on 2017-07-31 19:02:58
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\showAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f0e623ea1e9_32340849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47cf9f7f5e3e4128c625b212a0073514054f64c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\showAdmin.tpl',
      1 => 1501470284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f0e623ea1e9_32340849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 60%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color: powderblue;
    }
    table tr th,table tr td
    {
        border: 1px solid dimgrey;
        text-align: center;
    }
</style>
<div id="Container_right">
    <table>
        <tr><th colspan="3"><h2>管理员信息表</h2></th></tr>
        <tr>
            <th>Num</th>
            <th>Name</th>
            <th>Operation</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrAdmin']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['admin']->value["id"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['admin']->value["name"];?>
</td>
                <td><a href="#">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Modify</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Add</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</div><?php }
}
