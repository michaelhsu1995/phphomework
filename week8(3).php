<?php
session_start();
if(isset($_SESSION["success"])){
	echo "歡迎進入一般使用者<br>";
	echo "<a href='week8(5).php'>登出</a>";

}
else{
	echo "failure to visit";
}

$aco=@$_POST["userid"];

$pwd=@$_POST["pass"];

$gender=@$_POST["gender"];

$phone=@$_POST["input"];

$list=@$_POST["list"];
$sql2="INSERT INTO hw0413 (aco,pwd,gender,phone,list) VALUES ($aco','$pwd','$gender','$phone','$list')";
$result=mysqli_query($link,$sql2);
$result=mysqli_query($link,"SELECT * FROM hw0413");
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	
	echo $row["aco"];
	echo "</td><td>";
	echo $row["pwd"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	
	echo $row["phone"];
	
	echo "</td><td>";
	echo $row["list"];
	echo "</td>";
}
echo "<table>";
mysqli_close($link);





echo "<br>";

echo "你是一般使用者";
echo "<br>";

echo "我才管你的性別";
echo "<br>";

echo "年級通常是二年級";

echo "<br>";


?>
