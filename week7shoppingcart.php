<!DOCTYPE html>
<html>
<head>
	<title>shoppingcart</title>
</head>
		<body leftmargin="150" topmargin="150">

		<table border="10">
		<tr><td>功能</td><td>編號</td><td>商品名稱</td><td>價格</td><td>數量</td></tr>

<?php

echo "==========================================";
echo "<br>";
$total=0;
while( list($arr,$value) = each($_COOKIE)){
	if(isset($_COOKIE[$arr])&&is_array($_COOKIE[$arr])){
	echo "<a href='hw7delete.php?id=$arr'>刪除</a>";
	while(list($name,$value) = each($_COOKIE[$arr])){
		if($name=="name"){
			echo $value." ";
		}
		if($name=="price"){
			$price=$value;
			echo $value," ";
		}
		if($name=="quantity"){
			$quantity=$value;
			echo $value," ";
		}
		
	}
	$total += $price * $quantity;
		echo "<br>";
	}
}
	echo "總價:",$total,"<br>";




echo "<br>";
echo "==========================================";


?>

</table>
			<hr/>
			|<a href="week7catalog.php">商品目錄<a>|
			<a href="week7shoppingcart.php">查看購物車<a>|

</body>
</html>
