<?php

// Inclusion du fichier de configuration (connexion à la base de données, constantes, etc.)
require_once('../config.php');

// Inclusion du fichier contenant les fonctions liées aux commandes (order)
require_once('../model/order.repository.php');

// Vérifie si la requête HTTP est de type POST (donc si le formulaire a été soumis)
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Démarre une session pour récupérer les informations de l'utilisateur connecté
    session_start();

    // Récupère la commande associée à l'utilisateur connecté (probablement via la session)
    $orderByUser = findOrderByUser();

    // Modifie le statut de la commande pour indiquer qu'elle est expédiée
    $orderByUser["status"] = "SHIPPED";

    // Enregistre les modifications apportées à la commande (met à jour en base de données)
    saveOrder($orderByUser);

    // Message de confirmation à afficher à l'utilisateur
    $message = "Demande d'expédition confirmée";

} else {
    // Si ce n'est pas une requête POST, le message reste vide
    $message = "";
}

// Inclusion de la vue qui va afficher l'interface d'expédition
require_once("../view/ship-order.view.php");
