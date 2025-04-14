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
}
