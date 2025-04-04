
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
 				<li>Créer une commande</li>
 			</ul>
 		</nav>
 
 	</header>
 
 
 	<main>
 	
 		<a href="create.order.controllers.php"><h1>Payer une commande</h1></a>
 
 		<?php if ($orderByUser) {?>
 			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
 			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
 			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>
 
 
 			<button>Payer</button>
 		<?php } else { ?>
 			<p>Vous n'avez pas de commande à payer</p>
 		<?php } ?>
 
 
 		
 		
 
 	</main>
 
 </body>
 </html>