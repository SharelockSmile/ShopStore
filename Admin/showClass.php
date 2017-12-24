<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include '../System/SmartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

$sqlFirst="SELECT *FROM tb_class WHERE supid=0";
$resFirst=$db->ExecuteDQL($sqlFirst);
$smarty->assign("resFirst",$resFirst);
$sqlSecond="SELECT *FROM tb_class WHERE supid<>0";
$resSecond=$db->ExecuteDQL($sqlSecond);
$smarty->assign("resSecond",$resSecond);

function classMenu($id=0)
{
    global $db;
    global $str;
    $sqlFirst = "SELECT * FROM tb_class WHERE supid={$id}";
    $resFirst=$db->ExecuteDQL($sqlFirst);
   /* echo "<pre>";
    var_dump($resFirst);
    echo "</pre>";*/
    $str.="<tr>";
    foreach ($resFirst as $firstArr)
    {
        $str.="<td>";
        $str.=$firstArr["name"]."</td><td><a href='#'>删除</a>";
        classMenu($firstArr["id"]);
        $str.="</td>";
    }
    $str.="</tr>";
    return $str;
}
$smarty->assign("str",classMenu(0));


$smarty->display("showClass.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/31
 * Time: 11:05
 */