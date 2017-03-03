<?php include_once 'products.inc.php'; ?>
<div class="cart">
	<p>Products in your cart</p><br>
	<ul>
	<?php 
		if(!empty($_SESSION['cart']))
		{
			foreach ($_SESSION['cart'] as $s){
				echo "<li><p>".$products[$s]['title']."</p></li>";
			}
		}
		else{
			echo "<li><p>Your Shopping Cart Is Empty</p></li>";;
		}
	?>
	</ul>
</div>