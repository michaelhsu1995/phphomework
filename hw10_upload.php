<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$c=$_POST["count"];

	for ($i=0;$i<$count;$i++) {
		echo '<input type="file" name="count[]">'."<br>";			
	}
	
	
	$count=$_GET["count"];
	if(isset($_FILES["upload"])){
		for($i=0;$i<$count;$i++){
			$name=$_FILES["upload"]["name"][$i];
			$tmp=$_FILES["upload"]["tmp_name"][$i];
			if(!empty($name)){

				echo "上傳成功<br>";
			}else{
				echo "上傳失敗";
			}
		}
	}
?>
</body>
</html>