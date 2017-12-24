<?php
/* Smarty version 3.1.30, created on 2017-07-31 11:03:05
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\showMembers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597e9de9b00f89_57236085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f0f98efd5daff1817a355cb47758dc8a176ff6' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\showMembers.tpl',
      1 => 1501462200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597e9de9b00f89_57236085 (Smarty_Internal_Template $_smarty_tpl) {
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
        <tr><th colspan="7"><h2>会员信息表</h2></th></tr>
        <tr>
            <th>Name</th>
            <th>Real Name</th>
            <th>Tel</th>
            <th>QQ</th>
            <th>Address</th>
            <th>Shop</th>
            <th>Consume</th>
        </tr>
        <?php
$__section_k_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__smarty_section_k'] : false;
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrMenbers']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total != 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["name"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["realname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["tel"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["QQ"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["address"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["shopping"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arrMenbers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["consume"];?>
</td>
            </tr>
        <?php
}
}
if ($__section_k_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_0_saved;
}
?>
    </table>
</div><?php }
}
