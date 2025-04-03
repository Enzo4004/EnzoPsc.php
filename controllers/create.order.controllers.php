<?php

require_once('../config.php');
require_once('../model/product.repository.php');
require_once('../model/order.repository.php');

session_start();

$message = "";

if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{

	try {
		$order = createOrder($_POST['product'], $_POST['quantity']);
		saveOrder($order);
	} catch(Exception $e) {
		$message = $e->getMessage();
	}
	

}

$orderByUser = findOrderByUser();

require_once('../view/create.order.view.php');

// le controleur : 

// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer / stocker des données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view