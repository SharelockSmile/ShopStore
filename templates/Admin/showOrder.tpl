<!--导入JQuery库文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}jquery-3.1.0.js"></script>
<!--导入login.tpl登录文件js文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}orderInfo.js"></script>
<style type="text/css">
    table
    {
        margin: 0 auto;
        width: 80%;
        border-collapse: collapse;
    }
    table tr th
    {
        background-color: #6ce26c;
    }
    table tr th,table tr td
    {
        border: 1px solid dimgrey;
        text-align: center;
    }
</style>
<div id="Container_right">
    <table>
        <tr>
            <th colspan="10"><h1>订单管理</h1></th>
        </tr>
        <tr>
            <th>订单号</th>
            <th>消费金额</th>
            <th>下单时间</th>
            <th>消费者</th>
            <th>收货人</th>
            <th>付款方式</th>
            <th>邮寄方式</th>
            <th>订单状态</th>
            <th>查看详情</th>
            <th>订单处理</th>
        </tr>
        {foreach from=$resOrder item=order}
            <tr>
                <td>{$order["formid"]}</td>
                <td>{$order["total"]}</td>
                <td>{$order["formtime"]}</td>
                <td>{$order["vendee"]}</td>
                <td>{$order["taker"]}</td>
                <td>{$order["pay_method"]}</td>
                <td>{$order["del_method"]}</td>
                <td>{$order["stateName"]}</td>
                <td><a href="#" id="orderInfo">订单详情</a></td>
                <td><a href="#" onclick="orderDel({$order["formid"]},{$order["sId"]})">订单处理</a></td>
            </tr>
            {foreachelse}
            <tr><td colspan="10"><h2>抱歉，暂无人下单</h2></td></tr>
        {/foreach}
    </table>
    <div id="alertInfo" style="display: none;margin-top: 30px" >
        <table>
            <tr>
                <td>订单编号：<span id="orderId"></span></td>
                <td>订单状态：
                    <input type="radio" name="chk" value="1">未付款
                    <input type="radio"  name="chk"  value="2">已付款
                    <input type="radio" name="chk"  value="3">已发货
                    <input type="radio" name="chk"  value="4">已收货
                </td>
                <td>
                    <a href="#" id="updateState">确认修改</a>
                </td>
                <td>
                    <a href="#" id="back">取消</a>
                </td>
            </tr>
        </table>
    </div>
</div>