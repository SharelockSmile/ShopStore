<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

$title=$_POST["txtTitle"];
$content=$_POST["txtContent"];
$time=$_POST["addTime"];

$sqlPublics="INSERT INTO tb_public(title,content, addtime) VALUES ('{$title}','{$content}','{$time}')";
$resPublics=$db->ExecuteDML($sqlPublics);
if($resPublics)
{
    echo "<script type='text/javascript'>
alert('添加成功');
window.location='showPublics.php';
</script>";
}else
    {
        echo "<script type='text/javascript'>
      alert('添加失败');
      window.location='addPublics.php';
</script>";
    }
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/29
 * Time: 11:14
 */