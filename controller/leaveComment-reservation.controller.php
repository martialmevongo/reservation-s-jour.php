<?php
require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/Reservation.repository.php');

$reservationForUser = findReservationForUser();

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $comment = $_POST["comment"] ?? ""; 

    $reservationForUser->leaveComment($comment); 
    
    persistReservation($reservationForUser);  
    
    $message = "Commentaire envoyé"; 
}

require_once('../view/leaveComment-reservation.view.php');