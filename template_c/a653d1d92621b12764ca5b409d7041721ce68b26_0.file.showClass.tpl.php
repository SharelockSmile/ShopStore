<?php
/* Smarty version 3.1.30, created on 2017-07-31 14:23:52
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\showClass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597eccf8c25c76_30466987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a653d1d92621b12764ca5b409d7041721ce68b26' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\showClass.tpl',
      1 => 1501475425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597eccf8c25c76_30466987 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    table
    {
        margin: 0 auto;
        width: 50%;
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

<table>
    <tr><th colspan="2">类别表</th></tr>
    <tr>
        <th>ClassName</th>
        <th>Operation</th>
    </tr>
    <?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resFirst']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['resFirst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]["name"];?>

                    <select>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resSecond']->value, 'secondArr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['secondArr']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['secondArr']->value["supid"] == $_smarty_tpl->tpl_vars['resFirst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]["id"]) {?>
                                <option><?php echo $_smarty_tpl->tpl_vars['secondArr']->value["name"];?>
</option>
                            <?php }?>
                            <?php
}
} else {
?>

                            暂无子类
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
            </td>
            <td><a href="#">删除</a></td>
        </tr>
    <?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
</table>

<?php }
}
