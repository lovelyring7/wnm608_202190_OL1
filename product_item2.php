
<?php

			include_once "lib/php/functions.php";

			$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id']);

			print_p($product);

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elish</title>
	<?php include "meta.php"; ?>
	<?php include "itemlist.php"; ?>
</head>
<body>
	

	<?php include "navbar.php"; ?>



	<section id="product_list">
		<div class="container">
			<h2>Product item33</h2>
			<p>This is item # <?= $_GET['id'] ?> </p>
			<p><a href="product_add_to_cart.php">Add to Cart</a></p>
		</div>
	</section>




	<!--footer-->
	<footer>
		<div class="container display-flex grid">
			<div class="col-xs-12 col-lg-8" id="mailing">
				<h4>Join our mailing list </h4>
				<p>Get info about promotions and new arrivals</p>
				<form class="display-flex grid">
					<input class="col-lg-8 col-xs-12" type="text" placeholder="Enter your email address"><button class="col-lg-3 col-md-3 col-xs-6">Submit</button>
				</form>
			</div>
			<div class="flex-stretch"></div>
			<div class="col-xs-12 col-lg-3" id="connect">
				<h4>Connect with us</h4>
				<div class="display-flex">
					<a href="http://www.facebook.com"><img src="image/icon_fb.png"></a>
					<a href="http://www.twitter.com"><img src="image/icon_tw.png"></a>
					<a href="http://www.instagram.com"><img src="image/icon_ig.png"></a>
					<a href="http://www.pinterest.com"><img src="image/icon_pr.png"></a>
				</div>
			</div>
		</div>
	</footer>
	
</body>
</html>