<?php


//SELECT * FROM order where user.id = $id
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

function createOrder($product, $quantity) {

	if ($quantity < 0 || $quantity > 3) {
		return false;
	} else {
		$order = [
			"product" => $product,
			"quantity" => $quantity
		];
	
		return $order;
	}
}


// INSERT INTO order values ($order['product'], $order['quantity'])
function saveOrder($order) {
	$_SESSION["order"] = $order;
}