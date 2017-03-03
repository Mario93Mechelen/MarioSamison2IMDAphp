<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<style>
		img
		{
			width:50px;
		}
	</style>
</head>
<body>
<?php include_once 'products.inc.php'; ?>
	<ul>
		<?php foreach($products as $key => $p): ?>
		<li>
			<p><?php echo $p['title']; ?>
			</p>
			<img src="<?php echo $p['pic']; ?>" alt="tie">
			<a href="details.php?productid=<?php echo $key; ?>"><?php echo $p['info']; ?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>