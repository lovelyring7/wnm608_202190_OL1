<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elish — Checkout</title>
	<?php include "meta.php"; ?>
	<?php include "itemlist.php"; ?>
</head>
<body>
	

	<?php include "navbar.php"; ?>




	<section id="checkout">
		<div class="container">
			<h2>Product checkout</h2>

			<form class="form">
						<h3>Address</h3>
					
						<div class="form-control">
							<label for="address-street" class="form-label">Street</label>
							<input id="address-street" type="text" placeholder="Streetname" class="form-input">
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs12 col-md-6">
									 <label for="address-city" class="form-label">City</label>
									<input id="address-city" type="text" placeholder="City" class="form-input">
								</div>
								<div class="col-xs12 col-md-6">
									 <label for="address-state" class="form-label">State</label>
									<input id="address-state" type="text" placeholder="State" class="form-input">
								</div>
							</div>
							
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs12 col-md-6">
									 <label for="address-zip" class="form-label">Zip code</label>
									<input id="address-zip" type="text" placeholder="Zip code" class="form-input">
								</div>
								<div class="col-xs12 col-md-6">
									 <label for="address-county" class="form-label">County</label>
									<input id="address-county" type="text" placeholder="County" class="form-input">
								</div>
							</div>
							
						</div>

					<h3>Payment</h3>
						<div class="form-control">
							<label for="payment-name" class="form-label">Full Name</label>
							<input id="payment-name" type="text" placeholder="Name" class="form-input">
						</div>
						<div class="form-control">
							<label for="payment-number" class="form-label">Card Number</label>
							<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
							
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs12 col-md-6">
									 <label for="payment-expiration" class="form-label">Expiration</label>
									<input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
								</div>
								<div class="col-xs12 col-md-6">
									 <label for="payment-cvv" class="form-label">CVV</label>
									<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
								</div>
							</div>
							
						</div>
						<div class="form-control">
							<label for="payment-zip" class="form-label">Zip code</label>
							<input id="payment-zip" type="text" placeholder="Zip code" class="form-input">
							
						</div>
						<div class="form-control">
							<!--<input type="submit" class="form-button" value="Submit">-->
							<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
						</div>
					</form>
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