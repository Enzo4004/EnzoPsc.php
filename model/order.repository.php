<?php


//SELECT * FROM order where user.id = $id
// Cette fonction simule un SELECT * FROM order WHERE user.id = $id
// Elle vérifie si une commande est stockée en session, et la retourne si elle existe
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

// Cette fonction vérifie que la commande respecte les règles (quantité entre 0 et 3)
// Puis elle crée un tableau représentant la commande
function createOrder($product, $quantity) {

	if ($quantity < 0) {
		// Interdiction d'avoir une quantité négative
		throw new Exception("Interdiction de mettre une quantité inférieure à 0");

		// Interdiction d'avoir plus de 3 articles par commande
	} else if ($quantity > 3){
		throw new Exception("Interdication de mettre quantité supérieur à 3");

	} else {


		// Si tout est bon, on crée la commande sous forme de tableau associatif
		$order = [
			"product" => $product,
			"quantity" => $quantity,
			"createdAt" => new DateTime(),// Date actuelle
			"status" => "CART"	 // Statut par défaut
		];
	
		return $order;	// On retourne la commande créée	
	}
}


// INSERT INTO order values ($order['product'], $order['quantity'])
// Cette fonction simule un INSERT INTO order en enregistrant la commande dans $_SESSION
function saveOrder($order) {
	$_SESSION["order"] = $order;
}