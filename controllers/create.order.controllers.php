<?php 
//ca fait appelle a la page pour afficher les erreurs 
require_once("../config.php") ;

//démarrage de la session
session_start() ;

// Vérification si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Récupération des données du formulaire
    $quantity = isset($_POST['quantity']);
    $product = isset($_POST['product']) ;

    // Création du tableau $order
    $order = [
        'quantity' => $quantity,
        'product' => $product,
    ];

    // Initialisation du panier dans la session s'il n'existe pas
    if (!isset($_SESSION['orders'])) {
        $_SESSION['orders'] = [];
    }

    // Ajout de la commande au panier
    $_SESSION['orders'][] = $order;

    echo "Commande ajoutée avec succès !";
}


// message au chargement de la page (base)
$message = "";

// condition qui vérifie l'envoi des valeurs dans le formulaire
if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{
    // stockage des valeurs envoyées
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];

    // message à afficher avec les valeurs enregistrées
	$message = "Votre commande contient : " .  $quantity . " " . $product . "!";
}


    //ca fait appelle a la pages view (html) si besoin 
    require_once("../view/create.order.view.php");
  

?>