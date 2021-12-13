<?


include_once "lib/php/functions.php";
include_once "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elish</title>
	<?php include "parts/meta.php"; ?>
	<?php include "itemlist.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	<script>
		query({type:'products_all'}).then(d=>{
			$(".productlist").html(listItemTemplate(d.result))
		});
	</script>

</head>
<body>
	

	<?php include "navbar.php"; ?>




	<section id="best">
		<div class="container">
			<h2>Product list</h2>


			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Product">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft"> 
					<div class="display-flex flex-wrap">
						<div class="flex-stretch display-flex">
						
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="form-button3">All</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Jacket" type="button" class="form-button3">Jacket</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Knit" type="button" class="form-button3">Knit</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Skirt" type="button" class="form-button3">Skirt</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Pants" type="button" class="form-button3">Pants</button>
							</div>
						</div>
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Price:High to Low</option>
								<option value="2">Price:Low to high</option>

							</select>
						</div>
					</div>	
				</div>
			</div>
		</div>

			<div class="productlist grid gap"></div>
			
			
			<div class='grid contents'></div>
			


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