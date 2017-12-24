<?php
/* Smarty version 3.1.30, created on 2017-07-28 21:11:36
  from "D:\php1\Apache\htdocs\ShopStore\templates\Admin\Left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597b38081e1856_88728083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdfd49c838caaed04af7377f8d22b5ab672367f8' => 
    array (
      0 => 'D:\\php1\\Apache\\htdocs\\ShopStore\\templates\\Admin\\Left.tpl',
      1 => 1501247327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b38081e1856_88728083 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id="firstU">
    <?php
$__section_k_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__smarty_section_k'] : false;
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['firstMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total != 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <li class="firstli">
            <span><?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["menuName"];?>
</span>
            <ul id="secondU">
                <?php
$__section_kk_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_kk']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk'] : false;
$__section_kk_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['secondMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_kk_1_total = $__section_kk_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_kk'] = new Smarty_Variable(array());
if ($__section_kk_1_total != 0) {
for ($__section_kk_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] = 0; $__section_kk_1_iteration <= $__section_kk_1_total; $__section_kk_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] : null)]["parentId"] == $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["menuId"]) {?>
                        <li class="secondli"><a href="<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] : null)]["link"];?>
"><?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] : null)]["menuName"];?>
</a></li>
                    <?php }?>
                <?php
}
}
if ($__section_kk_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_kk'] = $__section_kk_1_saved;
}
?>
            </ul>
        </li>
    <?php
}
}
if ($__section_k_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_0_saved;
}
?>
</ul><?php }
}
