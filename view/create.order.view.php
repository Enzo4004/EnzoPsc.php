<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>


<!-- Importation du header -->
<?php require_once('../partial/header.php'); ?>

<section>

    <h2>Crée ta commande </h2>
    <!-- Création d'un formulaire -->
    <form method="post">

        <!--texte pour mettre la quantité que l'on veut -->
        <label for="quantity">quantité
            <input type="number" name="quantity" placeholder="Enter your quantity here..." id="quantity">
        </label>

        <!-- selection pour dsélectionner un produit -->
        <label for="product">
            <select name="product" id="product">
                <option value="tee-shirt Mario">Tee-shirt Mario</option>
                <option value="tee-shirt Gta">Tee-shirt GTA</option>
                <option value="tee-shirt Elden Ring">Tee-shirt Elden Ring</option>
            </select>
        </label>

        <button type="submit">Envoyer la commande</button>
    </form>

    <!-- Utilisation de la variable $message du controllers -->
    <h3><?php echo $message ?></h3>

</section>

</main>
</body>

</html>

</main>
</body>
</html>