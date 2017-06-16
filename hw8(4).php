<?php
session_start();
if(isset($_SESSION["success"])){
	echo "歡迎進入管理者<br>";
	echo "<a href='hw8(5).php'>登出</a>";
}
else{
	echo "failure to visit";
}

?>