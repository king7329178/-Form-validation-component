<?php
header("Content-Type:text/plain;charset=UTF-8");
require_once("init.php");
@$uname=$_REQUEST["uname"];
if($uname){//练习6分钟，下课休息10分钟
	sleep(5);
  $sql="select * from xz_user where uname='$uname'";
  if(count(sql_execute($sql))==0)
    echo "true";
  else
    echo "false";
}else{
	sleep(5);
  @$email=$_REQUEST["email"];
  $sql="select * from xz_user where email='$email'";
  if(count(sql_execute($sql))==0)
    echo "true";
  else
    echo "false";
}