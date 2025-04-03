<?php


//SELECT * FROM order where user.id = $id
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

// vérifie que la commande a le droit d'être créée
// créé la commande
function createOrder($product, $quantity) {

	if ($quantity < 0) {
		throw new Exception("Interdiction de mettre une quantité inférieure à 0");
	} else if ($quantity > 3){
		throw new Exception("Interdication de mettre quantité supérieur à 3");
		
	} else {
		$order = [
			"product" => $product,
			"quantity" => $quantity,
			"createdAt" => new DateTime()
		];
	
		return $order;
	}
}


// INSERT INTO order values ($order['product'], $order['quantity'])
function saveOrder($order) {
	$_SESSION["order"] = $order;
}