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
	</style>
</head>
<body>
	<a href="products.php">Back to store</a>
	<p><?php echo $products[$productId]['title']; ?></p>
	<img src="<?php echo $products[$productId]['pic']; ?>" alt="tie">
</body>
</html>