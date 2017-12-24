<?php
session_start();
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

$nuame=$_POST["uname"];
$upwd=$_POST["upwd"];

$sql="SELECT * FROM tb_admin WHERE `name`=\"luo\" AND pwd=MD5('{$upwd}')" ;
$res=$db->ExecuteDQL($sql);
if (count($res)==1)
{
	echo "<script type='text/javascript'>
                 alert('登陆成功');
                 window.location.href='main.php';
</script>";
}else{
	echo "<script type='text/javascript'>
                 alert('登录失败');
                 window.location.reload();
</script>";
}
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 10:34
 */