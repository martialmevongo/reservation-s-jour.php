<?php
require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/Reservation.repository.php');

// j'utilise la fonction findReservationForUser
// pour récupérer la reservation créé par l'utilisateur (ou pas)
// et je la stocke dans la variable $reservationForUser

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Reservation = findReservationForUser();
    $Reservation->cancel();
}
require_once('../view/cancel-reservation.view.php');
