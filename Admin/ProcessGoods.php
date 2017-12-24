<?php
//包含数据库文件以及连接数据库
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 23:16
 */