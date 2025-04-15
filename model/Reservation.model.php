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

	public $canceledAt;

	public $paidAt;

	public $comment;

	public $commentedAt;

	// méthode appelée automatiquement lors de la création de l'instance de classe (new Reservation())
	// les parametres du constructor sont à remplir aussi lors de l'instance de classe
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


	public function cancel() {
		if ($this->status === "CART") {
			$this->status = "CANCELED";
			$this->canceledAt = new DateTime();
		}
	}

	public function pay() {
		if ($this->status === 'CART') {
			// on devrait un véritable paiement
			$this->status = "PAID";
			$this->paidAt = new DateTime();
		}
	}

	public function leaveComment($userComment) {
		if ($this->status === "PAID") {
			$this->comment = $userComment;
			$this->commentedAt = new DateTime();
		}
	}


}


// objet basé sur la classe Reservation / instance de classe Reservation
// il contient toutes les propriétés de la classe

$name = "David Robert";
$place = "Versailles";
$start = new DateTime('2025-04-04');
$end = new DateTime('2025-04-05');
$cleaning = false;

// la variable reservation contient une instance de la classe Reservation / un objet issu de la classe Reservation
// l'objet reservation contient toutes les propriétés (name etc) définies dans la classe
// et peut appeler toutes les fonctions définies dans la classe
$reservation = new Reservation($name , $place, $start, $end, $cleaning);

// j'appelle la méthode pay de l'objet reservation. L'objet reservation a récupéré la méthode pay de la classe Reservation
$reservation->pay();

$reservation->leaveComment("Super séjour au château de Versailles. Petit bémol pour la hauteur sous plafond. Le wifi marche BOF.");


