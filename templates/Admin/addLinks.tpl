<!--导入JQuery库文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}jquery-3.1.0.js"></script>
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}addLinks.js"></script>

<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 60%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color:#b9c9ef;
    }
    table tr th,table tr td
    {
        border: 1px solid #E8EAEB;
        text-align: center;
        font-size: 18px;
    }
</style>

<div id="Container_right">
    <form name="publicsForm" action="ProcessLink.php" method="post">
        <table id="tab">
            <tr><th colspan="2"><h2>添加链接</h2></th></tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="txtName" id="txtName"></td>
            </tr>
            <tr>
                <td>URL(必须以http://或https://开头):</td>
                <td><input type="text" name="txtURL" id="txtURL"></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="ADD" id="addLinks"></td></tr>
        </table>
    </form>
</div>