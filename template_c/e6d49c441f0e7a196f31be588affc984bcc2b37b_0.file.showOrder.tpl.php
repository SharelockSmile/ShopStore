<?php
/* Smarty version 3.1.30, created on 2017-07-31 15:19:29
  from "D:\phpStudy\WWW\phpTest\ShopStore\templates\Admin\showOrder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597eda0140a804_61348534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d49c441f0e7a196f31be588affc984bcc2b37b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\ShopStore\\templates\\Admin\\showOrder.tpl',
      1 => 1501470034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597eda0140a804_61348534 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--导入JQuery库文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
<!--导入login.tpl登录文件js文件-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
orderInfo.js"><?php echo '</script'; ?>
>
<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 80%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color: #6ce26c;
    }
    table tr th,table tr td
    {
        border: 1px solid dimgrey;
        text-align: center;
    }
</style>
<div id="Container_right">
    <table>
        <tr>
            <th colspan="10"><h1>订单管理</h1></th>
        </tr>
        <tr>
            <th>订单号</th>
            <th>消费金额</th>
            <th>下单时间</th>
            <th>消费者</th>
            <th>收货人</th>
            <th>付款方式</th>
            <th>邮寄方式</th>
            <th>订单状态</th>
            <th>查看详情</th>
            <th>订单处理</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resOrder']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["formid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["total"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["formtime"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["vendee"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["taker"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["pay_method"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["del_method"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value["stateName"];?>
</td>
                <td><a href="#" id="orderInfo">订单详情</a></td>
                <td><a href="#" onclick="orderDel(<?php echo $_smarty_tpl->tpl_vars['order']->value["formid"];?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value["sId"];?>
)">订单处理</a></td>
            </tr>
            <?php
}
} else {
?>

            <tr><td colspan="10"><h2>抱歉，暂无人下单</h2></td></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <div id="alertInfo" style="display: none;margin-top: 30px" >
        <table>
            <tr>
                <td>订单编号：<span id="orderId"></span></td>
                <td>订单状态：
                    <input type="radio" name="chk" value="1">未付款
                    <input type="radio"  name="chk"  value="2">已付款
                    <input type="radio" name="chk"  value="3">已发货
                    <input type="radio" name="chk"  value="4">已收货
                </td>
                <td>
                    <a href="#" id="updateState">确认修改</a>
                </td>
                <td>
                    <a href="#" id="back">取消</a>
                </td>
            </tr>
        </table>
    </div>
</div><?php }
}
