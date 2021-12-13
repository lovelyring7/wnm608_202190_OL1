<?php

include_once "lib/php/functions.php";

?>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
		<div class="container">
			<div id="sub" class="display-flex nav">
				<div class="flex-stretch"></div>
				<ul class="display-flex">
					<li><a href="#"><img src="image/search.png"></a></li>
					<li><a href="product_cart.php"><img src="image/cart.png"><span class="badge"><?= makeCartBadge(); ?></span></a></li>
					<li><a href="#">Sign in</a></li>
				</ul>
			</div>
			<div class="display-flex">
				<div class="flex-none">
					<a href="index.php"><h1>Elish</h1></a>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none menu-button">
					<label for="menu">&equiv;</label>
				</div>
				<nav class="display-flex nav2">
					<ul class="display-flex">
						<li><a href="product_list.php">Shop</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="help.php">Help</a></li>

					</ul>
				</nav>
			</div>
		</div>
	</header>