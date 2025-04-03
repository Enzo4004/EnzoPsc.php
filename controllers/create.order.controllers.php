<?php


// Je récupère le fichier config.php
require_once '../config.php';
require_once '../model/order.repository.php';
require_once '../model/product.repository.php';




// Je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur
// et stockera les données de session dans le serveur 
session_start();


$message = "";
// Initialise la variable $message comme une chaîne vide.


    // Vérifie si le formulaire a été soumis avec la méthode POST.

    if (array_key_exists("quantity", $_POST) && 
    array_key_exists("product", $_POST)) 
    {
       
        //*La fonction createOrder crée la valeur $order qui prends en compte deux facteur (product et quantity) via la method $_POST
        $order = createOrder ($_POST['product'], $_POST['quantity']);

        if ($order){  // si $order contient une commande il sauve la ciommande via la fonction saveOrder
            saveOrder($order);
        }else{ // sinon $message devient "impossible de creer la commande
            $message = "impossible de créé la commande";
        }

        saveOrder($order);
    } //saveOrder est une function qui permet de sauvegarder la valeur $order créé ci-dessu

$orderByUser = findOrderByUser();
// je donne une valeur au resultat de ma fonction findOrderByUser
   

require_once('../model/product.repository.php');

//on vient requpéré le fichier view

require_once '../view/create.order.view.php';