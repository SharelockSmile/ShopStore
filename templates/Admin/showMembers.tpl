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
        <tr><th colspan="7"><h2>会员信息表</h2></th></tr>
        <tr>
            <th>Name</th>
            <th>Real Name</th>
            <th>Tel</th>
            <th>QQ</th>
            <th>Address</th>
            <th>Shop</th>
            <th>Consume</th>
        </tr>
        {section loop=$arrMenbers name=k }
            <tr>
                <td>{$arrMenbers[k]["name"]}</td>
                <td>{$arrMenbers[k]["realname"]}</td>
                <td>{$arrMenbers[k]["tel"]}</td>
                <td>{$arrMenbers[k]["QQ"]}</td>
                <td>{$arrMenbers[k]["address"]}</td>
                <td>{$arrMenbers[k]["shopping"]}</td>
                <td>{$arrMenbers[k]["consume"]}</td>
            </tr>
        {/section}
    </table>
</div>