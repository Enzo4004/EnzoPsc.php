<?php

// Déclaration d'une classe représentant une commande
class Order {

    // Propriété qui représente le produit commandé
    public $product;

    // Propriété qui représente la quantité de produit commandée
    public $quantity;

    // Propriété qui représente la date de création de la commande
    public $createdAt;

    // Propriété qui représente le statut de la commande (ex : "PAID", "SHIPPED", CART , etc.)
    public $status;


    public $status;
}

// je créé un objet, qui aura toutes les propriétés définies dans la classe.
// pour l'instant ces propriétés sont vides, mais je peux les définir
// cela s'appelle une instance de classe 
$order = new Order();

// remplir les valeurs de chacune des propriétés
$order->product = "Teeshirt REYMISTERIO";
$order->quantity = 5;
$order->createdAt = new DateTime();
$order->status = "Cart";










