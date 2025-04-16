<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>reservation-séjour</title>
</head>
<body>

	<header>

		<nav>
			<ul>

			</ul>
		</nav>

	</header>


<main>
	
	<h1>Annuler une réservation</h1>

	<?php require_once('../view/partials/_resume-reservation.view.php'); ?>

	<form method="POST">

		<button type="submit">Annuler la réservation</button>

	</form>

	<p><?php echo $message; ?></p>


</main>

</body>
</html>