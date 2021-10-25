<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elish</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="test2-5.css">
	<link rel="stylesheet" href="gridsystem.css">
	<link rel="stylesheet" href="storetheme_elish.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Lora:ital@0;1&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
	<?php include "itemlist.php"; ?>
</head>
<body>
	<header>
		<div class="container">
			<div id="sub" class="display-flex nav">
				<div class="flex-stretch"></div>
				<ul class="display-flex">
					<li><a href="#"><img src="image/search.png"></a></li>
					<li><a href="#"><img src="image/cart.png"></a></li>
					<li><a href="#">Sign in</a></li>
				</ul>
			</div>
			<div class="display-flex">
				<div class="flex-none">
					<h1>Elish</h1>
				</div>
				<div class="flex-stretch"></div>
				
				<nav class="display-flex nav">
					<ul class="display-flex">
						<li><a href="shop.php">Shop</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="help.php">Help</a></li>

					</ul>
				</nav>
			</div>
		</div>
	</header>



	<!--hero-->

	<section id="hero">
		<div class="container grid">
			<div class="col-md-6">
				<div>
					<h2>Wear Stylish</h2>
					<p>Be still stylish, wearing a mask. </p>
					<button class="button1">Shop Now</button>
				</div>
			</div>
			<div class="col-md-6">
				<img src="image/hero.jpg">
			</div>
		</div>
	</section>



	<!--Bestsellers-->

	<section id="best">
		<div class="container">
			<div class="display-flex title">
				<div class="flex-none">
						<h3>Bestsellers</h3>
				</div>
				<div class="flex-stretch"></div>
				<div class="display-flex nav">
					<ul class="display-flex">
						<li><a href="shop.php"><button class="button2 button2-1">All</button></a></li>
						<li><a href="shop.php"><button class="button2 button2-2">Outer</button></a></li>
						<li><a href="shop.php"><button class="button2 button2-2">Top</button></a></li>
						<li><a href="shop.php"><button class="button2 button2-2">Skirt</button></a></li>
						<li><a href="shop.php"><button class="button2 button2-2">Pants</button></a></li>
					</ul>
				</div>
			</div>
			<div class="grid contents">
				<div class="col-lg-3 col-sm-6 col-xs-12 item">
					<img class="itemimage" src="<?php echo $item1[$details[2]]; ?>">
					<div class="display-flex">
						<h4 class="flex-none"><?php echo $item1[$details[0]]; ?></h4>
						<div class="flex-stretch"></div>
						<p><?php echo $item1[$details[1]]; ?></p>
					</div>
					<button class="button1">Add to cart</button>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12 item">
					<img class="itemimage" src="<?php echo $item2[$details[2]]; ?>">
					<div class="display-flex">
						<h4 class="flex-none"><?php echo $item2[$details[0]]; ?></h4>
						<div class="flex-stretch"></div>
						<p><?php echo $item2[$details[1]]; ?></p>
					</div>
					<button class="button1">Add to cart</button>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12 item">
					<img class="itemimage" src="<?php echo $item3[$details[2]]; ?>">
					<div class="display-flex">
						<h4 class="flex-none"><?php echo $item3[$details[0]]; ?></h4>
						<div class="flex-stretch"></div>
						<p><?php echo $item3[$details[1]]; ?></p>
					</div>
					<button class="button1">Add to cart</button>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12 item">
					<img class="itemimage" src="<?php echo $item4[$details[2]]; ?>">
					<div class="display-flex">
						<h4 class="flex-none"><?php echo $item4[$details[0]]; ?></h4>
						<div class="flex-stretch"></div>
						<p><?php echo $item4[$details[1]]; ?></p>
					</div>
					<button class="button1">Add to cart</button>
				</div>
				
			</div>
		</div>
	</section>



	<!--sale-->

	<section id="sale">
		<div class="container">
			<h2>Up to 30% Sale</h2>
			<p>
				Refresh your closet at more affordable prices. 
			</p>
			<button class="button1">Shop Now</button>
		</div>
	</section>


	<!--sns-->

	<section id="sns">
		<div class="container">
			<h2>Moments with us</h2>
			<div class="display-flex grid">
				<div class="sns_box col-xs-6 col-lg-3">
					<img src="image/sns1.jpg">
					<img src="image/icon_sns.png">
				</div>
				<div class="sns_box col-xs-6 col-lg-3">
					<img src="image/sns2.jpg">
					<img src="image/icon_sns.png">
				</div>
				<div class="sns_box col-xs-6 col-lg-3">
					<img src="image/sns3.jpg">
					<img src="image/icon_sns.png">
				</div>
				<div class="sns_box col-xs-6 col-lg-3">
					<img src="image/sns4.jpg">
					<img src="image/icon_sns.png">
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
					<input class="col-lg-8 col-xs-12" type="text" placeholder="Enter your email address"><button class="col-lg-4 col-md-4 col-xs-6">Submit</button>
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