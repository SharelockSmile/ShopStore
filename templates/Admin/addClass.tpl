<!--导入JQuery库文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}jquery-3.1.0.js"></script>
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}addClass.js"></script>
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
                {foreach from=$resClass item=classRes}
                    <option value="{$classRes["id"]}">{$classRes["name"]}</option>
                {/foreach}
            </select>
        </td>
    </tr>
    <tr>
        <td><input type="button" value="确认添加" id="btnId"></td>
        <td><input type="button" value="取消" id="btnRepeal"></td>
    </tr>
</table>