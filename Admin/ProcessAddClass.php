<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

$cName=$_POST["cName"];
$supId=$_POST["cId"];
//echo $cName."----".$supId;
$sqlAddClass="INSERT INTO tb_class (name,supid)VALUES ('{$cName}',{$supId})";
$resAddClass=$db->ExecuteDML($sqlAddClass);
if ($resAddClass)
{
    echo "1";
}else
{
    echo "0";
}
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/31
 * Time: 14:57
 */