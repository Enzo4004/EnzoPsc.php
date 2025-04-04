
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 
 	<header>
 
 		<nav>
 			<ul>
 				<a href="http://localhost/commerce.tshirt.php/controllers/create.order.controllers.php"><li>Retour Menu création</li></a>
 			</ul>
 		</nav>
 
 	</header>
 
 
 	<main>
 	<h1>Payer une commande</h1>
    <!-- Vérifie si une commande existe pour l'utilisateur -->
 		<?php if ($orderByUser) {?>
              <!-- Affiche le nom du produit et la quantité commandée -->
 			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
            <!-- Affiche la date de création de la commande au format année-mois-jour -->
 			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
            <!-- Affiche le statut actuel de la commande -->
 			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>
            
            <!-- Bouton permettant de payer la commande -->
 			<button>Payer</button>
 		<?php } else { ?>
            <!-- Message affiché si aucune commande n’est trouvée pour l’utilisateur -->
 			<p>Vous n'avez pas de commande à payer</p>
 		<?php } ?>
         
        <!-- Inclusion du header ) -->
         <?php require_once('../partial/header.php'); ?>
 		
 		
 
 	</main>
 
 </body>
 </html>