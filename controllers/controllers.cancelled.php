<?php

require_once('../settings/config.php');
require_once('../model/order.repository.php');

session_start();

$orderByUser = findOrderByUser();

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ($orderByUser['status'] === 'CART') {
		$orderByUser['status'] = "CANCELED";
		saveOrder($orderByUser);
	} else {
		$message = "la commande est déjà payée. Vous ne pouvez plus l'annuler";
	}

}


require_once('../view/view.cancelled.view.php');