<?php
// Démarre la session, nécessaire pour manipuler les variables de session
session_start();

// Inclure le fichier contenant la fonction de récupération des commandes
require_once('../model/order.repository.php');

// Récupérer les informations de la commande pour l'utilisateur actuel
$orderByUser = findOrderByUser();

// Inclure le fichier de vue qui permet d'afficher la page de paiement
require_once('../view/pay.order.view.php');

// Vérifier si la requête est de type POST, ce qui signifie que l'utilisateur a soumis le formulaire de paiement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Met à jour le statut de la commande à "PAID" (payé)
    $orderByUser['status'] = "PAID";

    // Sauvegarde la commande avec le statut mis à jour
    saveOrder($orderByUser);
}
?>