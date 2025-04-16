<?php
require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/Reservation.repository.php');

$reservationForUser = findReservationForUser();

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $comment = $_POST["comment"] ?? "";      
    
    if (empty($comment)) {
        $message = "Le commentaire ne peut pas être vide.";
    } else {
        
        $reservationForUser->leaveComment($comment);  
        persistReservation($reservationForUser);  
        
        $message = "Commentaire envoyé avec succès!";
    }
}

require_once('../view/leaveComment-reservation.view.php');