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
 
  

	public function __construct() {

		// rejouter une a l'interieur de la class
        // l'utilisateur complète les valeur 
		$this->name = "Martial";
		$this->place = "Akonolinga";
		$this->startDate = new DateTime("25-04-15");
		$this->endDate = new DateTime("25-05-17");
		$this->cleaningOption = true;
        
		$this->nightPrice = 1000;

		// valeurs calculées automatiquement
		$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

		$this->totalPrice = $totalPrice;
		$this->bookedAt = new DateTime();
		$this->status = "CART";

	}

}

$reservation = new Reservation();


var_dump($reservation); 

