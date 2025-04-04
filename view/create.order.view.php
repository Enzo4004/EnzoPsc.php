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

		<p><?php echo $message; ?></p>
		<!-- Vérifie si l'utilisateur a déjà une commande existante -->
		<?php if ($orderByUser) { ?>
			<!-- Affiche les détails de la commande : produit et quantité -->
			<p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?>
				<?php echo $orderByUser['quantity']; ?>
				<!-- Affiche la date de création de la commande, formatée au format AAAA-MM-JJ -->
			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
			<!-- Affiche le statut actuel de la commande -->
			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>
		<?php } ?>
		<!-- Formulaire permettant à l'utilisateur de créer une nouvelle commande -->
		<form method="POST">
			<!-- Champ pour entrer la quantité souhaitée -->
			<label for="quantity">Quantity
				<input type="number" name="quantity" />
			</label>
			<!-- Menu déroulant pour choisir un produit -->
			<label for="product">
				<select name="product">
					<!-- Boucle qui génère une option pour chaque produit dans le tableau $products -->
					<?php foreach ($products as $product) { ?>
						<option value="<?php echo $product; ?>"><?php echo $product; ?></option>
					<?php } ?>
				</select>
			</label>

			<!-- Bouton pour soumettre le formulaire et créer une commande -->
			<button type="submit">Créer la commande</button>

		</form>

		<a href="http://localhost/commerce.tshirt.php/controllers/pay.order.controllers.php"><button> Afficher la
				commande</button></a>

	</main>
			
</body>

</html>