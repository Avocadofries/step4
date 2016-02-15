<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete</title>
<img id="title_img" src="Aniki.jpg">
</head>

<body>
<br>
<?php
header('Content-Type:text/html;charset=utf-8');
  include("mysql.inc.php");
  if($_GET['del']!=''){
	  $sql="DELETE FROM `ouch`.`cookiesusing` WHERE `using` ='{$_GET['del']}'";
	  mysqli_query($conn,$sql);
	  setcookie("biscuit",NULL);
	  $rowDeleted=mysqli_affected_rows($conn);
	  if($rowDeleted>0){
		  echo "删除成功";
		  }
		  else{
			  echo "删除失败";
			  }
	  }
?>
<br>
<p><a href="cookiesdestroyer.php">回到COOKIES管理界面</a></p>
</body>
</html>