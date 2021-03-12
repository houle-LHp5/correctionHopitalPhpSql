<?php
require_once '../controllers/controller-detailsAppointment.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LH Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="row">

        <div class="container border border-secondary shadow mt-5 p-4 col-6">

            <div class="text-center text-dark"><i class="fas fa-calendar-check p-2 logo"></i></div>
            <p class="text-center text-dark text-uppercase h3 mb-3">Détails du rendez vous</p>

            <?php
            // mise en place d'un message pour indiquer à l'utilisateur que le rdv a bien été modifié
            // nous utilisons un variable de session pour faire la condition
            if (isset($_SESSION['modifyAppointment']) && $_SESSION['modifyAppointment'] === true) {
                echo '<p class="h5 text-center text-info">Les modifications ont bien été prises en compte</p>';
                // Nous passons la variable à false pour ne plus qu'il s'affiche dans modification
                $_SESSION['modifyAppointment'] = false;
            }
            ?>

            <hr>

            <?php
            // Mise en place d'une condition pour ne plus afficher le formulaire quand le RDV a bien été enregistré
            if ($detailsAppointmentArray) {
                include 'include/details-appointment.php';
            } else { ?>
                <p class="h5 text-danger text-center mb-3"></i>Ce rendez-vous n'existe pas</p>
                <div class="text-center">
                    <a type="button" href="view-listAppointments.php" class="btn btn-sm btn-outline-secondary">Liste des rendez-vous</a>
                </div>
            <?php
            } ?>

        </div>

    </div>

    <div class="row justify-content-center">
        <!-- button retour accueil -->
        <a href="../index.php" class="btn btn-outline-secondary mt-2 col-2">Accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>