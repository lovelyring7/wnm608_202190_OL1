<?php

			include_once "lib/php/functions.php";
			include_once "parts/templates.php";

			$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");


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


	<section id="checkout">
		<div class="container">
			<h2>Your cart</h2>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-strecth"><strong>Sub Total</strong></div>
							<div class="flex-none">&dollar;3.50</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-strecth"><strong>Taxes</strong></div>
							<div class="flex-none">&dollar;3.50</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-strecth"><strong>Total</strong></div>
							<div class="flex-none">&dollar;7.00</div>
						</div>
						<div class="card-section">
							<a href="product_checkout.php" class="form-button">Checkout</a>
						</div>
					</div>
				</div>
			</div>
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