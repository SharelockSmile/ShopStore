<?php
class DBHelper
{
    //服务器名称
    private $serverName;
    //用户名
    private $userName;
    //密码
    private $passWord;
    //表
    private $dbName;
    //连接
    private $link;

    /**
     * DBHelper constructor.
     * @param String $s  服务器名
     * @param String $u  用户名
     * @param String $p  密码
     * @param String $db 数据库名
     */
    function __construct($s,$u,$p,$db)
    {
        $this->serverName=$s;
        $this->userName=$u;
        $this->passWord=$u;
        $this->dbName=$db;
    }

    /**
     * 创建连接
     *
     */
    function connet_DB()
    {
        $this->link=@mysqli_connect($this->serverName,$this->userName,$this->passWord) or die("连接失败");
        mysqli_select_db($this->link,$this->dbName) or  die("找不到数据库");
        mysqli_query($this->link,"set names utf8");

    }
    //DML数据操纵语言,,,,,有返回值的函数

    /**
     * 用于执行增删改操作的方法
     * @param $sql 要执行的sql语句
     * @return bool 方法的返回值
     * 当执行增删改成功并且受影响函数非0则返回true,否则返回false,表示执行增删改失败
     */
    function ExecuteDML($sql)
    {
        $res=mysqli_query($this->link,$sql) or die('数据操作有误');
        if ($res)
        {
            $row=mysqli_affected_rows($this->link);
            return $row>0?true:false;
        }else
        {
            return false;
        }
    }

    /**
     * 执行查询的方法
     * @param string $sql 要执行的查询的sql语句
     * @return array|bool
     * 查询成功，返回包含所有查询结果集的二维数组,查询失败则返回false
     */
    function ExecuteDQL($sql)
    {
        $arrAll=array();
        $res=mysqli_query($this->link,$sql) or die('SQL有误

        ');
        if($res)
        {
            while (($arr=mysqli_fetch_assoc($res))!=false)
            {
                //把每一次遍历拿到的数组放到一个二维数组中
                $arrAll[]=$arr;
            }
            return $arrAll;
            //释放资源
            mysqli_free_result($res);
        }else
        {
            return false;
        }
    }
    function __get($name)
    {
        return $this->$name;
    }

    /**
     * 析构函数，释放资源
     */
    /*function __destruct()
     {
     // TODO: Implement __destruct() method.
     mysqli_close($this->link);
     }*/
}