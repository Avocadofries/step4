<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<title>notepad</title>
</head>
<body>
<img id="title_img" src="saltyfierce.jpg">
<br>
<?php
header('Content-Type:text/html;charset=utf-8');
include("mysql.inc.php");

if(!empty($_POST['message']))
{
	$name=$_COOKIE['biscuit'];
	$message=$_POST['message'];
	}
	else{
		$errMsg.='unknown user<br>';
	}
?>
<?php 
    include("mysql.inc.php");
	mysqli_select_db($conn,"`ouch`");
    date_default_timezone_set('Asia/Shanghai'); 
	$number=0;
    $result = mysqli_query($conn,"SELECT * FROM `ouch`.`table`");
    while($row = mysqli_fetch_array($result))
    {
        if($number<$row['no:'])
        {
           $number=$row['no:'];
        }
    }
    $number++;
	$times=date('Y-m-d H:i:s');
    $sql="INSERT INTO `ouch`.`table` (`no:`, `name:`, `message:`,`time`)
    VALUES ('.$number.','.$name.','.$message.','.$times.')";
	$sql2="UPDATE `ouch`.`table` SET `time` = '.$times.' WHERE       `table`.`no:` = $number";
	mysqli_query($conn,$sql2);
	//echo 'sqltext:'.$sql;
    if (!mysqli_query($conn,$sql))
    {
        die('Fatal Error:'.mysql_error());
    }else{
		echo "更新成功";
		}
?>
<br>
<p><a href="board.php">查看留言</a></p>

</body>
</html>
