<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 90%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color:darkgrey;
    }
    table tr th,table tr td
    {
        border: 1px solid dimgrey;
        text-align: center;
        font-size: 18px;
    }
</style>
<div id="Container_right">
    <table>
        <tr><th colspan="3"><h2>公告信息表</h2></th></tr>
        <tr>
            <th>Title</th>
            <th>Detail</th>
            <th>Add Time</th>
        </tr>
        {foreach from=$arrPublic item=publics }
            <tr>
                <td>{$publics["title"]}</td>
                <td>{$publics["content"]}</td>
                <td>{$publics["addtime"]}</td>
            </tr>
        {/foreach}
    </table>
</div>