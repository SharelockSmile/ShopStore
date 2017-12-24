<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 60%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color: powderblue;
    }
    table tr th,table tr td
    {
        border: 1px solid dimgrey;
        text-align: center;
    }
</style>
<div id="Container_right">
    <table>
        <tr><th colspan="3"><h2>管理员信息表</h2></th></tr>
        <tr>
            <th>Num</th>
            <th>Name</th>
            <th>Operation</th>
        </tr>
        {foreach from=$arrAdmin item=admin }
            <tr>
                <td>{$admin["id"]}</td>
                <td>{$admin["name"]}</td>
                <td><a href="#">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Modify</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Add</a></td>
            </tr>
        {/foreach}
    </table>
</div>