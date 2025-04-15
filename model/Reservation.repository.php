<?php

<?php


function persistReservation($reservation) {

	session_start();

	$_SESSION["reservation"] = $reservation;

}

function findReservationForUser() {

	session_start();

	return $_SESSION["reservation"];

}

