<?php
// Inclusion de la config 
require_once('../settings/config.php');

// Inclusion du fichier qui gère les produits.
require_once('../model/product.repository.php');

// Inclusion du fichier qui gère les commandes.
require_once('../model/order.repository.php');


// Démarre la session pour accéder à $_SESSION
session_start();

// Variable qui servira à afficher un message (ex : erreur ou confirmation)
$message = "";

// Vérifie si le formulaire a été soumis avec les deux champs attendus
if (
	array_key_exists("quantity", $_POST) &&
	array_key_exists("product", $_POST)
) {

	try {

		// Crée une commande à partir des données du formulaire
		$order = createOrder($_POST['product'], $_POST['quantity']);

		// Sauvegarde cette commande dans la session
		saveOrder($order);


		// (Optionnel) tu pourrais mettre un message de confirmation ici aussi
		// En cas d'erreur (ex : quantité invalide), on stocke le message d'erreur
	} catch (Exception $e) {
		$message = $e->getMessage();
	}


}
// Récupère la commande existante (si elle existe déjà dans la session)
$orderByUser = findOrderByUser();


// Affiche la vue (formulaire et infos) en incluant le fichier HTML/PHP
require_once('../view/create.order.view.php');



// le controleur : 

// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer / stocker des données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view