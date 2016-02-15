<?php
  header('Content-type:text/html;charset=utf-8');
  include("mysql.inc.php");
  
  
  mysql_select_db($conn,"`ouch`");
  $sql="SELECT *FROM `ouch`.`cookies`";
  $result=mysqli_query($conn,$sql);
  $injection=mysqli_fetch_array($result);
  
  setcookie("biscuit","$injection[0]",time()+60*60*2);//有效期2小时
  
  mysqli_select_db($conn,"`ouch`");{
  
  $sql1="DELETE FROM `ouch`.`cookies` WHERE `randomname`= '$injection[0]'" ;
  mysqli_query($conn,$sql1);
  
  $sql2="INSERT INTO `ouch`.`cookiesusing`(`using`) VALUES ('.$injection[0].')";
  mysqli_query($conn,$sql2);
  }
  
  header ("Location:messageboard.php");
?>