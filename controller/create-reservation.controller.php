
<?
require_once('../config.php');
require_once('../model/Reservation.model.php');


// je créé un message vide
$message = "";

// je vérifie si le form a été envoyé
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // je récupère les données du formulaire envoyées par l'utilisateur
    $name = trim($_POST['name']);
    $place = trim($_POST['place']);
    $startDateStr = $_POST['start-date'];
    $endDateStr = $_POST['end-date'];

    // Vérification des champs obligatoires
    if (empty($name) || empty($place) || empty($startDateStr) || empty($endDateStr)) {
        $message = "Tous les champs doivent être remplis.";
    } else {
        // je créé des DateTime pour les dates
        try {
            $startDate = new DateTime($startDateStr);
            $endDate = new DateTime($endDateStr);

            // Vérification que la date de fin est après la date de début
            if ($startDate >= $endDate) {
                $message = "La date de fin doit être après la date de début.";
            } else {
                // je regarde si l'option nettoyage a été sélectionnée et je transforme la valeur en true ou false
                $cleaningOption = isset($_POST['cleaning-option']) && $_POST['cleaning-option'] === "on";

                // je créé une réservation : une instance de classe, en lui envoyant les données attendues
                $reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);

                // je créé un $message incluant le prix de la réservation (calculé automatiquement par ma classe Reservation)
                $message = "Votre réservation est confirmée, au prix de " . $reservation->totalPrice;
            }
        } catch (Exception $e) {
            $message = "Erreur de date: " . $e->getMessage();
        }
    }
}


require_once('../view/create-reservation.view.php');