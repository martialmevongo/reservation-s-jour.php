
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
    // je créé une function cancel
	public function cancel() {
    // ma function vient vérifier si le satus est en "CART"
        if ($this->status === "CART") {
    //et lui met le status annulé
            $this->status = "CANCELED";
        }
    }
    //je créé une function cancel qui est en status CART
    public function cancel()
    {
        if ($this->status === "CART") {
            $this->status = "CANCELED";
    //je viens ajouter la date actuelle au moment ou le status est canceled
            $this->cancelDate = new DateTime(); 
        }
    }
    //je créé une function paid qui est en status cart 
    public function PAID(){

        if ($this->status === "CART") {
    //je change le statut cart et le met en paid et j'ajoute la date de ^paiement 
            $this->status = "PAID";
            $this->paidDate = new DateTime();
        }
    }
    // je créé une function leaveComment qui est en status paid et j'ajoute la date de paiement
    public function leaveComment() {
        if ($this->status === "PAID") {
            $this->status = "leaveComment";
            $this->leaveCommentDate = new dateTime
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

$reservation = new Reservation($name , $place, $start, $end, $cleaning);



var_dump($reservation); 


