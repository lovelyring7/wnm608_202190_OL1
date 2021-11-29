<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch($data->type) {
	case "products_all":
		$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `products`,
			ORDER BY `data_create` DESC 
			LIMIT 12");

		break;
		case "product_search":
			$output['result'] = makeQuery(makeConn(),"SELECT * 
			FROM `products`
			WHERE LIKE '%$data->search%'
			ORDER BY `data_create` DESC 
			LIMIT 12");
		break;

	default: $output['error'] = "No Valid Type";
}

echo json_encode($output,JSON_NUMERIC_CHECK|JSON_UNESCAPED_UNICODE);