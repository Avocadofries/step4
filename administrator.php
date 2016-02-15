<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>权限狗大结界</title>
<img id="title_img" src="salty.jpg">
</head>
<?php
session_start();
?>
<p><?php echo $_SESSION['admin']?>您好。</p>
<p>伸张正义的时刻到了。</p>

<body>
   <form method="post" action="administrator.php">
   用户名:<input name="name">
     留言：<input name="message" style="width:200px">
         <input name="submit" type="submit" value="插入">
   </form>
<?php
  include("mysql.inc.php");
  mysqli_select_db($conn,"`ouch`");
  date_default_timezone_set('prc');  
  $times=date('Y-m-d H:i:s');
  $random=mt_rand(10,20);
  if(!empty($_POST['name'])&&!empty($_POST['message'])){
	  $name=$_POST['name'];
	  $message=$_POST['message'];
	  $sql="INSERT INTO `ouch`.`table`(`no:`,`name:`,`message:`,`time`)
	  VALUES('.$random.','.$name.','.$message.','.$times.')";
	 // echo 'sqltext:'.$sql;
	  mysqli_query($conn,$sql);
	  echo mysql_error();
	  }//到此为止，管理员插入发言功能实现(๑•̀ㅂ•́)و✧
  ?>

<?php 
	include("mysql.inc.php");
    $sql="SELECT* FROM `ouch`.`table` ORDER BY `table`.`no:` ASC";
    $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "<hr/><table border='1'>
		<tr><td>用户名</td><td>留言</td></tr>";
		
		while($row=mysqli_fetch_array($result)){
			echo"<tr><td>{$row['name:']}</td>
			         <td>{$row['message:']}</td><tr>
		             <td><a href='deletor.php?del=".$row['no:']."'>
					      删除</a></td></tr>
				     <td><a href='editorGET.php?edit=".$row['no:']."'>
					      篡改</a></td></tr>";
			          }
		echo'</table>';
		}//到此为止，管理员删除字段的功能已经实现(๑•̀ㅂ•́)و✧
?>   
<p><a href="cookies.php">发放cookies</a></p>
<p><a href="cookiesdestroyer.php">删除cookies</a></p>
<p><a href="board.php">回归屁民的世界</a></p>
</body>
</html>