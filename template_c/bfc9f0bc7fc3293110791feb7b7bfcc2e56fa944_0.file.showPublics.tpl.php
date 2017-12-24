<?php
/* Smarty version 3.1.30, created on 2017-07-29 00:29:46
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\showPublics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597b667a682fc0_97234509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc9f0bc7fc3293110791feb7b7bfcc2e56fa944' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\showPublics.tpl',
      1 => 1501254618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b667a682fc0_97234509 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 90%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color:darkgrey;
    }
    table tr th,table tr td
    {
        border: 1px solid dimgrey;
        text-align: center;
        font-size: 18px;
    }
</style>
<div id="Container_right">
    <table>
        <tr><th colspan="3"><h2>公告信息表</h2></th></tr>
        <tr>
            <th>Title</th>
            <th>Detail</th>
            <th>Add Time</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPublic']->value, 'publics');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['publics']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['publics']->value["title"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['publics']->value["content"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['publics']->value["addtime"];?>
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
