<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<title>notepad</title>
</head>
<body>
<div id="title">
<img id="title_img" src="Aniki.jpg">
<br>
<?php
header('Content-Type:text/html;charset=utf-8');
  include("mysql.inc.php");
  if($_GET['del']!=''){
	  $sql="DELETE FROM `ouch`.`table` WHERE `no:` ='{$_GET['del']}'";
	  mysqli_query($conn,$sql);
	  
	  $rowDeleted=mysqli_affected_rows($conn);
	  if($rowDeleted>0){
		  echo "删除成功";
		  }
		  else{
			  echo "删除失败";
			  }
	  }
?>
<p><a href="administrator.php">回到管理员界面</a></p>
</body>
</html>