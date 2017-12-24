<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 70%;
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
<div id="Container_right">
    <table>
        <tr><th colspan="2"><h2>链接信息表</h2></th></tr>
        <tr>
            <th>Name</th>
            <th>URL</th>
        </tr>
        {foreach from=$arrLinks item=Links }
            <tr>
                <td>{$Links["name"]}</td>
                <td>{$Links["url"]}</td>
            </tr>
        {/foreach}
    </table>
</div>