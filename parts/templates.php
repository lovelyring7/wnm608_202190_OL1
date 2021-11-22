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

function cartListTemplate($r,$o){
	return $r.<<<HTML
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="$o->thumbnail">
		</div>
		<div class="flex-stretch">
			<strong>$o->name</strong>
			<div>Delete</div>
		</div>
		<div class="flex-none">
			&dollar;$o->price
		</div>
	</div>

	HTML;
}