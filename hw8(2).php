<?php
$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '123456',  // 密碼
            'phpdb');  // 預設使用的資料庫名稱
if($link){
	echo "DB Connected!<br>";
}else{

	echo "DB Connection Failed<br>";
}



session_start();
$userid=$_POST["userid"];
$password=$_POST["pass"];

$tuserid="root";
$tpassword="123456";
$date=strtotime("+5 seconds",time());
if($userid==$tuserid && $password==$tpassword){
//  echo "successful logined";
	$_SESSION["success"]="yes";
	setcookie("id",$userid,$date);
	header("Location:hw8(3).php");
}
else{
	echo "fail<br>";
	header("refresh:3;url=hw8.php");
	echo "sessionID:".session_id();
}


session_start();
$userid=$_POST["userid"];
$password=$_POST["pass"];

$tuserid="michael";
$tpassword="michael";
$date=strtotime("+5 seconds",time());
if($userid==$tuserid && $password==$tpassword){
//  echo "successful logined";
	$_SESSION["success"]="yes";
	setcookie("id",$userid,$date);
	header("Location:hw8(4).php");
}
else{
	echo "fail<br>";
	header("refresh:3;url=hw8.php");
	echo "sessionID:".session_id();
}




?>






