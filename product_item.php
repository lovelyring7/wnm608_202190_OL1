<?php

			include_once "lib/php/functions.php";
			include_once "parts/templates.php"; 

			$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

			$images = explode(",", $product->images);

			$image_elements = array_reduce($images, function($r, $o){
				return $r. "<img src='$o'>";
			});

			// print_p($_SESSION);

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elish</title>
	<?php include "meta.php"; ?>
	<?php include "itemlist.php"; ?>

	<script src="js/product_thumbs.js"></script>
</head>
<body>
	

	<?php include "navbar.php"; ?>


	<section id="product_item">
		<div class="container">
			<div class="grid">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<div class="images-main">
							<img src="<?= $product->thumbnail ?>">
						</div>
						<div class="images-thumbs">
							<?= $image_elements ?>
						</div>
					</div>				
				</div>
				<div class="col-xs-12 col-md-5">
					<form class="card soft" method="post" action="cart_actions.php?action=add-to-cart">

						<input type="hidden" name="product-id" value="<?= $product->id ?>">

						<div class="card-section">
							<h2 class="product-title"><?= $product->name ?></h2>
							<div class="product-category"><?= $product->category ?></div>
							<div class="product-price">&dollar;<?= $product->price ?></div>
						</div>
						
						<div class="card-section">
							<div class="form-control">
								<label for="product-amount" class="form-label">Qty</label>
								<div class="form-select">
									<select id="product-amount" name="product-amount">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
								</div>
							</div>

							<div class="form-control">
								<label for="product-color" class="form-label">Color</label>
								<div class="form-select">
									<select id="product-color" name="product-color">
										<option>Red</option>
										<option>Green</option>

									</select>
								</div>
							</div>
						</div>


						<div class="card-section">
							<input type="submit" class="form-button" value="Add to Cart">
						</div>
					</form>				
				</div>
			</div>
			<div class="card flat dark">
				 <p><?= $product->description ?></p>
			</div>


			<h2>Recommended Products</h2>
			<?php
				recommendedSimilar($product->category,$product->id);
				?>
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