<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>allcookies</title>
<img id="title_img" src="trade.jpg">
</head>

<body>
<br>
<?php 
	include("mysql.inc.php");
    $sql="SELECT* FROM `ouch`.`cookiesusing`";
    $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "<hr/><table border='1'>
		<tr><td>COOKIES</td></tr>";
		
		while($row=mysqli_fetch_array($result)){
			echo"<tr><td>{$row['using']}</td><tr>
		             <td><a href='cookiesdeletor.php?del=".$row['using']."'>
					      删除</a></td></tr>";
			          }
		echo'</table>';
		}
?>   
<br>
<p><a href="administrator.php">回到管理界面</a></p>
</body>
</html>