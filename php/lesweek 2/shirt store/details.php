<?php 
include_once 'products.inc.php'; 
$productId = $_GET['productid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $products[$productId]['title']; ?></title>
	<style>
		img
		{
			width:50px;
		}
		a,p,img
		{
			float:left;
		}
		p
		{
			margin-top:80px;
		}
		#key
		{
			display:none;
		}
		button
		{
			float:left;
			margin-top:80px;
		}
	</style>
</head>
<body>
	<div>
	<a href="products.php">Back to store</a>
	<p><?php echo $products[$productId]['title']; ?></p>
	<img src="<?php echo $products[$productId]['pic']; ?>" alt="tie">
	<form action="" method="post">
		<label for="key"></label>
		<input type="text" id="key" name="key" value="<?php echo $productId; ?>">
		<button>Buy Now</button>
	</form>
	</div>
</body>
</html>