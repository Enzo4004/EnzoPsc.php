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

<!-- Création formulaire -->
    <form method="GET">

    <!-- Champ texte pour mettre la quantité que l'on veut -->
        <label for="quantity">quantity
            <input type="text" name="quantity" placeholder="Enter your quantity here..." id="quantity">
        </label>

    </form>

</section>

</main>
</body>
</html>