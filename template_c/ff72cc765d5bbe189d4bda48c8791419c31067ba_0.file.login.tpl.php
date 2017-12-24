<?php
/* Smarty version 3.1.30, created on 2017-07-28 15:17:07
  from "D:\php1\Apache\htdocs\ShopStore\templates\Admin\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ae4f3f05215_51819106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff72cc765d5bbe189d4bda48c8791419c31067ba' => 
    array (
      0 => 'D:\\php1\\Apache\\htdocs\\ShopStore\\templates\\Admin\\login.tpl',
      1 => 1501226225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597ae4f3f05215_51819106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>欢迎登陆乐购书城</title>
    <link rel="stylesheet" href="<?php echo @constant('Admin_CSS_URL');?>
login.css">
</head>
<body>
    <div id="header"></div>
    <div id="back">
        <div id="login">
            <form id="myForm" action="ProcessLogin.php" method="post">
                <table id="tab">
                    <tr><td><h2>管理登录</h2></td></tr>
                    <tr><td>
                                        用户名：<input type="text" name="uname" id="uname">
                        </td></tr>
                    <tr><td>
                                       密码：<input type="password" name="upwd" id="upwd">
                        </td></tr>
                    <tr><td>
                            <input type="submit" value="登录" style="width: 60px;height: 30px;font-size: 18px;color:green">
                        </td></tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html><?php }
}
