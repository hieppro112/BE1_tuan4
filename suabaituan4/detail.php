<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php
	include "products.php";
	$id = "";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	else{
		//chuyen huong ve trang index
		header('location:index.php');
	}
	foreach($products as $value):
		if($value['id'] == $id):
	?>
	<div class='sanpham'>
		<img src='public/images/<?php echo $value['image'] ?>'>
		<h1><?php echo $value['name'] ?></h1>
		<b>Giá: </b> <span class='gia'><?php echo $value['price'] ?></span><br>
		<p><?php echo $value['desc'] ?></p>
		<a class="addcart" href="#">Add To Cart</a>
	</div>
	<?php 
		endif;
	endforeach
	?>
</body>
</html>
