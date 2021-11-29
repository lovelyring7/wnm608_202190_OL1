

const listItemTemplate = templater(o=> `
<div class="col-lg-3 col-sm-6 col-xs-12 item"><a href="product_item.php?id= $o->id ">
					<img class="itemimage" src="${o.thumbnail}">
						<h4 class="flex-none">${o.name}</h4>
						<div class="flex-stretch"></div>
						<p>&dollar;${o.price}</p>
					</a>
	</div>
	`);