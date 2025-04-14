
<?php

class Reservation {

	public $name;

	public $place;

	public $startDate;

	public $endDate;

	public $totalPrice;

	public $nightPrice;

	public $status;

	public $bookedAt;

	public $cleaningOption;

	public function __construct($name, $place, $startDate, $endDate, $cleaningOption) {

		// utilisateur envoie ces valeurs
		// temporairement "en dur"
		$this->name = $name;
		$this->place = $place;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->cleaningOption = $cleaningOption;

		$this->nightPrice = 1000;

		// valeurs calculées automatiquement
		$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

		$this->totalPrice = $totalPrice;
		$this->bookedAt = new DateTime();
		$this->status = "CART";
	}


}


// objet basé sur la classe Reservation / instance de classe Reservation
// il contient toutes les propriétés de la classe

$name = "David Robert";
$place = "Versailles";
$start = new DateTime('2025-04-04');
$end = new DateTime('2025-04-05');
$cleaning = false;

$reservation = new Reservation($name , $place, $start, $end, $cleaning);



var_dump($reservation); 


