<?php


function productListTemplate($r,$o){
	return $r.<<<HTML
	<div class="col-lg-3 col-sm-6 col-xs-12 item"><a href="product_item.php?id= $o->id ">
					<img class="itemimage" src="$o->thumbnail">
						<h4 class="flex-none">$o->name</h4>
						<div class="flex-stretch"></div>
						<p>&dollar;$o->price</p>
					</a>
	</div>
	HTML;
}

function selectAmount($amount=1,$total=10){
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++){
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o){
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);
	return $r.<<<HTML
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="$o->thumbnail">
		</div>
		<div class="flex-stretch">
			<strong>$o->name ($o->amount)</strong>
			<form action="cart_actions.php?action=delete-cart-item" method="post">
				<input type="hidden" name="id" value="$o->id">
				<input type="submit" class="form-button3 inline" value="Delete">
			</form>
		</div>
		<div class="flex-none">
			<div>&dollar;$totalfixed</div>
			<form action="cart_actions.php?action=update-cart-item" method="post" onchange ="this.submit()">
				<input type="hidden" name="id" value="$o->id">
				<div class="form-select" style='font-size:0.8em'>
					$selectamount
				</div>
			</form>
		</div>
	</div>

	HTML;
}

function cartTotals(){
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

	return <<<HTML

	<div class="card-section display-flex">
		<div class="flex-strecth"><strong>Sub Total</strong></div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="card-section display-flex">
		<div class="flex-strecth"><strong>Taxes</strong></div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
	<div class="card-section display-flex">
		<div class="flex-strecth"><strong>Total</strong></div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>
	

	HTML;
}






function recommendedProducts($a) {
$products = array_reduce($a,'productListTemplate');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}


function recommendedAnything($limit=4) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY rand() DESC LIMIT 4");

				recommendedProducts($result);
}


function recommendedCategory($cat,$limit=4) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` ='$cat' ORDER BY `price` DESC LIMIT 4");

				recommendedProducts($result);
}

function recommendedSimilar($cat,$id=0,$limit=4) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` ='$cat' AND `id` <>$id ORDER BY rand() DESC LIMIT 4");

				recommendedProducts($result);
}