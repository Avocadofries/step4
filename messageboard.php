<!DOCTYPE html\>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>留言板</title>
<div id="title">
<img id="title_img" src="salty.jpg">
<h1>messageboard</h1>
</div>
</head>

<body>
     <form method="post" action="faceproject.php">
     这是要输入的东西<br>
     <textarea name="message" cols="50" rows="8"></textarea><br>
     <input type="submit" value="就这样吧">
     <input type="reset" value="我再想想">
     </form>
<?php
  if($_COOKIE['biscuit']==NULL){
	  header("Location:ineedcookie.php");
	  }
?>
	 <br><p>Copyright @Avocadofries All Rights Reserved<p>
	 <p><a href="admin.html">如果你是权限狗，戳这里</a></p><br>
    
     
</body>
</html>
