<?php require('../view/partial/_header.view.php'); ?>
<!-- Inclusion du fichier d'en-tête (_header.view.php), qui contient probablement 
     le début du HTML : <html>, <head>, <body>, les liens CSS, etc. -->

<main>
    <!-- Début du contenu principal de la page -->

    <h1>Expédition de commande</h1>
    <!-- Titre principal de la page -->

    <p><?php echo $message; ?></p>
    <!-- Affiche un message dynamique.
         Ce message est défini dans le fichier de traitement PHP :
         - S'il y a une expédition confirmée : "Demande d'expédition confirmée"
         - Sinon : chaîne vide -->

    <form method="post">
        <!-- Formulaire avec méthode POST (les données sont envoyées au serveur de façon invisible) 
             Lorsqu'on soumet ce formulaire, le script PHP précédent est exécuté -->

        <button type="submit">Expédiez cette commande</button>
        <!-- Bouton d'envoi du formulaire. Le simple fait de cliquer dessus
             envoie la requête POST, qui déclenche la mise à jour du statut de la commande -->

    </form>

</main>

</body>
</html>
