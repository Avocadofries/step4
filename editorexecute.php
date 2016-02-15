<?php
header('Content-Type:text/html;charset=utf-8');
include("mysql.inc.php");

if(!empty($_POST['refresh'])){
	mysqli_select_db($conn,"`ouch`");
	$sql="UPDATE `ouch`.`table`
	     SET `message:`='.{$_POST['refresh']}.'
		 WHERE `no:`='.{$_POST['id']}.'";
		 mysqli_query($conn,$sql);
	}

$rowUpdated=mysqli_affected_rows($conn);
if($rowUpdated>1){
	echo"篡改成功";
	}
	else{
		echo"篡改失败or根本没改";
		}
?>
<p><a href="administrator.php">返回管理员界面</a></p>