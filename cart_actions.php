<?php

include_once "lib/php/functions.php";


function getCart(){
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}
function addToCart($p){
	// $_SESSION['cart']= [];
	$cart = getCart();

	$_SESSION['cart'][] = (object)[
		"id"=>$p[product-id],
		"amount"=>$p['product-amount'],
		"color"=>$p['product-color']
	];

}

	switch($_GET['action']){
		case "add-to-cart":
			$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_POST['product-id'])[0];
			addToCart($_POST);
			//header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
				break;

		case "update-cart-item":
			
			//header("location:{$_SERVER['PHP_SELF']}?id=$id");
				break;


		case "delete-cart-item":
		
			//header("location:{$_SERVER['PHP_SELF']}");
				break;
		default:
				die("Incorrect Action");
	}

	print_p([$_GET, $_POST,$_SESSION]);