<?
require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/Reservation.repository.php');


$reservationForUser = findReservationForUser();

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$reservationForUser->payée();
	persistReservation($reservationForUser);
	$message = "Réservation payée";

}

require_once('../view/pay-reservation.view.php');
