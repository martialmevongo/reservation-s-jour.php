<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation-séjour</title>
</head>
<body>
    <header>
        <nav>
            <ul>


            </ul>
        </nav>
    </header>
    <main>
        <h1>Créer une reservation</h1>

        <form method="POST">
            <label>Nom
                <input type="text" name="name">
            </label>

            <label>Lieu
                <select name="place" >
                    <option value="chateau-versailles">chateau de versailles</option>
                    <option value="zad-limoges">ZAD de limoges</option>
                    <option value="renault-clio">Renault clio</option>
                    <option value="maison-campagne">maison de campagne</option>
                </select>
            </label>

            <label>Date de debut
                <input type="date" name="start-date">
            </label>

            <label>Date de fin 
                <input type="date" name="end-date">
            </label>

            <label>Option ménage ?
                <input type="checkbox" name="cleaning-option">
            </label>

            <button type="submit">Créer la reservation</button>

        </form>

        <?php if (!is_null($reservation)) { ?>
            <div>
                <p>Récap de la reservation</p>
                <p>Nom : <?php echo $reservation->name; ?></p>
                <p>Lieu : <?php echo $reservation->place; ?></p>
                <p>Dates : <?php echo $reservation->startDate->format('d-m-y'); ?> / <?php echo $reservation->endDate->format('d-m-y'); ?></p>
                <p>Prix total : <?php echo $reservation->totalPrice; ?></p>
                <p>Option de ménage : <?php echo $reservation->$cleaningOption; ?></p>
            </div>
       <?php } ?>

    </main>
    
</body>
</html>