<!DOCTYPE html>
<html>
<head>
	<title>catalog</title>
</head>
<body>
<form action="week7catalog.php" method="POST" >
			選擇商品：
				<select name="item" >
					<option value="0001">10吋變形平板-$12000</option>
					<option value="0002">15.6吋筆記型電腦-$27000</option>
					<option value="0003">iPhone手機-$21000</option>
				</select>

					<select name="count">

	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	</select>
				<input type="text" name="quantity">					

				<input type="submit" name="" value="訂購">
			</form>

|<a href="hw7catalog.php">商品目錄<a>|
			<a href="hw7shoppingcart.php">查看購物車<a>|




<?php
			session_start();
			if(isset($_POST["item"])){
				$_SESSION["quantity"]=$_POST["quantity"];
				$item=$_POST["item"];
				$_SESSION["id"]=$item;
				switch(strtoupper($item)){
					case "S001":
						$_SESSION["name"]="10吋變形平板";
						$_SESSION["price"]=12000;
						break;
					case "S002":
						$_SESSION["name"]="15.6吋筆記型電腦";
						$_SESSION["price"]=27000;
						break;
					case "S003":
						$_SESSION["name"]="iPhone手機";
						$_SESSION["price"]=21000;
						break;
				}
			
			header("location:week7savecart.php");
			}
			?>
</body>
</html>
