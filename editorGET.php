<?php
   include("mysql.inc.php");
   if(!empty($_GET['edit'])){
	   mysqli_select_db($conn,"`ouch`");
	   $sql="SELECT * FROM `ouch`.`table` WHERE `no:`='.{$_GET['edit']}.'";
	   $result=mysqli_query($conn,$sql);
	   $row=mysqli_fetch_array($result);
	   }
	   else{
		   echo "<script>
	       alert('查询有误，正在返回......');
	       location='adminitrator.php'</script>";
		   }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>篡改页面</title>
</head>

<body>
     <form method="post" action="editorexecute.php">
      ID:
	  <?php echo $row['name:'];?><br>
      message:
      <br>
      <textarea name="refresh" cols="70" rows="3"></textarea><br>
      <input name="id" type="hidden" value="<?php echo $row['no:'];?>">
      <input name="submit" type="submit" value="提交"/>
      </form>
      <p><a href="administrator.php">返回管理员界面</a></p> 
</body>
</html>