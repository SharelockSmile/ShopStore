<?php
/* Smarty version 3.1.30, created on 2017-07-31 15:10:02
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\addClass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ed7cae74f30_26288301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a333f16bde174a168c526ed801b3242b547999' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\addClass.tpl',
      1 => 1501484087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597ed7cae74f30_26288301 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--导入JQuery库文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
addClass.js"><?php echo '</script'; ?>
>
<style>
    table
    {
        margin: 20px auto;
        width: 40%;
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
    <tr><th colspan="2">Add Class</th></tr>
    <tr>
        <td>Name：</td>
        <td><input type="text" id="className"></td>
    </tr>
    <tr>
        <td>SupClass：</td>
        <td>
            <select id="selId">
                <option value="0">主类</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resClass']->value, 'classRes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['classRes']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['classRes']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['classRes']->value["name"];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </td>
    </tr>
    <tr>
        <td><input type="button" value="确认添加" id="btnId"></td>
        <td><input type="button" value="取消" id="btnRepeal"></td>
    </tr>
</table><?php }
}
