<!--导入JQuery库文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}jquery-3.1.0.js"></script>
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}My97DatePicker/WdatePicker.js"></script>

<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 60%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color:darkgrey;
    }
    table tr th,table tr td
    {
        border: 1px solid #E8EAEB;
        text-align: center;
        font-size: 18px;
    }
</style>

<div id="Container_right">
    <form name="publicsForm" action="ProcessPublics.php" method="post">
        <table id="tab">
            <tr><th colspan="2"><h2>添加公告</h2></th></tr>
            <tr>
                <td>Title:</td>
                <td><input type="text" name="txtTitle"></td>
            </tr>
            <tr>
                <td>Content:</td>
                <td><textarea rows="15" cols="30" name="txtContent" style="resize: none"></textarea></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>
                    <input id="beginTime" name="addTime" type="text" onClick="WdatePicker()" >
                </td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="ADD"></td></tr>
        </table>
    </form>
</div>