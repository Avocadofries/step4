<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>board</title>
<img id="title_img" src="saltyfierce.jpg">
</head>

<body>
<br>
<h1>Annoymboard</h1>
<br>
<?php
     include("mysql.inc.php");
     $result = mysqli_query($conn,"SELECT * FROM `ouch`.`table`");
     $n = 0;
     while($row = mysqli_fetch_array($result))
       {
        $queue[$n]=$row['name:'];
        $rambling[$n]=$row['message:'];
        $n++;
       }
       for($i=$n-1;$i>=0;$i--)
       {
         echo $queue[$i].''."用户"."<br>".$rambling[$i];
         echo "<br/>";
       }
?>
<p><a href="messageboard.php">发言<a></p>
 <br>
 <p>Copyright @Avocadofries All Rights Reserved<p>
 <p><a href="admin.html">如果你是权限狗，戳这里</a></p><br>
</body>
</html>