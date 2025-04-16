<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservation-séjour</title>
</head>
<body>

	<header>

		<nav>
			<ul>

			</ul>
		</nav>

	</header>


<main>

  <?php
  // Vérifier si la réservation à annuler existe
  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Reservation"]) && $_POST["Reservation"] === "summit") {
      // Appeler la fonction qui la réservation
      $Reservation = cancelReservation();
  }
  ?>
  
  <form method="POST">
      <button type="submit">Annuler la réservation</button>
  </form>

</main>

</body>
</html>