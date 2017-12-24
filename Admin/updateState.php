<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "bookshop");
$db->connet_DB();

$stateId=$_POST["newState"];
$orderId=$_POST["orderId"];
$sql="UPDATE tb_form SET state={$stateId} WHERE formid={$orderId}";
$res=$db->ExecuteDML($sql);
if($res)
{
    echo "1";
}
else{
    echo "0";
}

/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/31
 * Time: 10:22
 */