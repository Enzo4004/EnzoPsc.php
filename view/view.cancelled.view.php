<?php require_once('partial/header.php'); ?>

<section>

    <h2>Annulation de commande</h2>

    <!-- Récupère la commande de l'utilisateur -->
    <?php if (findOrderByUser()) { ?>

        <!-- Je récupère la commande -->
        <h3><?php echo $orderByUser["quantity"]; ?> : <?php echo $orderByUser["product"]; ?></h3>

        <!-- Date au format Année, mois, jour -->
        <p>crée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
        
		<!-- Statut de la commande -->
        <h3>Votre commande est: "<?php echo $orderByUser['status'] ?>"</h3>

        <!-- Formulaire pour annuler la commande si elle est au statut "CART" -->
        <?php if ($orderByUser['status'] === "CART") { ?>
           
			<form method="POST">
                <div><button type="submit">Annuler la commande</button></div>
            </form>
        
            <!-- Vérifie si le statut est déjà "CANCELLED" -->
        <?php } elseif ($orderByUser['status'] === "CANCELLED") { ?>
            <p>votre commande est prete a etre annulez</p>

            <!-- Vérifie si il n'a pas le statut "PAID" -->
        <?php } else { ?>
          <h3>Vous pouvez pas annuler vortre commande elle est deja payé .</h3>
        <?php } ?>

        <!-- Vérifie si il y a une commande -->
    <?php } else { ?>
        <h3>pas de commande a annulé </h3>
    <?php } ?>

</section>

</main>
</body>

</html>