<?php
  header("content-type:text/html;charset=utf-8");
  include("mysql.inc.php");
   function randCode($length=5,$type=0){
    $arr=array(1=>"0123456789",2=>"abcdefghijklmnopqrstuvwxyz",3=>        "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    if($type==0){
        array_pop($arr);
        $string=implode("",$arr);
    }elseif($type=="-1"){
        $string=implode("",$arr);
    }else{
        $string=$arr[$type];
    }
        $count=strlen($string)-1;
        $code='';
        for($i=0;$i<$length;$i++){
        $code.=$string[rand(0,$count)];
    }
    return $code;
 }
  $rand=randCode(10,1);
  var_dump($rand);
  $address=$_SERVER["REMOTE_ADDR"];
  mysqli_select_db($conn,"`ouch`");
  $sql="INSERT INTO `ouch`.`cookies`(`randomname`,`ipaddress`)
  VALUES('.$rand.','.$address.')";
  mysqli_query($conn,$sql);
  // echo 'sqltext:'.$sql;
  $n=0;
  $result = mysqli_query($conn,"SELECT * FROM `ouch`.`cookies`");
  $row=mysqli_fetch_array($result);
  $coo[$n]=$row['randomname'];
  if($coo[0]!=NULL){
	  echo "植入成功";
	  }
	  else{
		  echo "植入失败，请回炉重造。";
		  }
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<title>generador</title>
</head>
<body>
<p><a href="administrator.php">回去干活</a><p>
</body>
</html>