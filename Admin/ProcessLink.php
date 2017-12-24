<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

$Name=$_POST["linkName"];
$url=$_POST["linkURL"];
//echo $Name."----".$url;

$sqlLinks="INSERT INTO tb_links (name,url)VALUES('{$Name}','{$url}')";
$resLinks=$db->ExecuteDML($sqlLinks);
if ($resLinks)
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
 * Time: 19:11
 */