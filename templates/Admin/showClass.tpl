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
{*<table>
    {$str}
</table>*}
<table>
    <tr><th colspan="2">类别表</th></tr>
    <tr>
        <th>ClassName</th>
        <th>Operation</th>
    </tr>
    {section loop=$resFirst name=key}
        <tr>
            <td>
                {$resFirst[key]["name"]}
                    <select>
                        {foreach from=$resSecond item=secondArr}
                            {if $secondArr["supid"]==$resFirst[key]["id"]}
                                <option>{$secondArr["name"]}</option>
                            {/if}
                            {foreachelse}
                            暂无子类
                        {/foreach}
                    </select>
            </td>
            <td><a href="#">删除</a></td>
        </tr>
    {/section}
</table>

