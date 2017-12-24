<?php
/* Smarty version 3.1.30, created on 2017-07-31 09:23:02
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\Left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597e867658a206_91936508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628d0658ae1958e159d19fd376f355f7a48d83be' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\Left.tpl',
      1 => 1501463380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597e867658a206_91936508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--导入JQuery库文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
<!--导入login.tpl登录文件js文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
leftMenu.js"><?php echo '</script'; ?>
>

<div id="divContainer">
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
                <ul class="secondU">
                    <?php
$__section_kk_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_kk']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk'] : false;
$__section_kk_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['secondMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_kk_1_total = $__section_kk_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_kk'] = new Smarty_Variable(array());
if ($__section_kk_1_total != 0) {
for ($__section_kk_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] = 0; $__section_kk_1_iteration <= $__section_kk_1_total; $__section_kk_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] : null)]["parentId"] == $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]["menuId"]) {?>
                            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] : null)]["link"];?>
" target="frameRight"><?php echo $_smarty_tpl->tpl_vars['secondMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_kk']->value['index'] : null)]["menuName"];?>
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
    </ul>
</div>

<style type="text/css">
    #firstU
    {
        margin-top: 30px;
    }
    #firstU, .secondU
    {
        list-style-type: none;
        color: #373D45;
    }
    .secondU{
        display: none;
    }
    li
    {
        margin-top: 10px;
    }
    .secondli a
    {
        text-decoration: none;
        color: #0e6578;
        height: 30px;
    }
</style>
<?php }
}
