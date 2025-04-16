<?php
require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/Reservation.repository.php');

$reservationForUser = findReservationForUser();

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$reservationForUser->cancel();
	persistReservation($reservationForUser);
	$message = "Réservation annulée";

}

require_once('../view/cancel-reservation.view.php');
