<html>
<head>
    <title>欢迎登陆乐GO</title>
    <link rel="stylesheet" href="{$smarty.const.Admin_CSS_URL}login.css">
</head>
<body>
    <div id="header"></div>
    <div id="back">
        <div id="login">
            <form id="myForm" action="ProcessLogin.php" method="post">
                <table id="tab">
                    <tr><td><h2>管理登陆</h2></td></tr>
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
</html>