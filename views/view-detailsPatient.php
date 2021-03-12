<?php
require_once '../controllers/controller-detailsPatient.php';
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

<body class="bg-light">

   <div class="row">

      <div class="container border border-secondary shadow mt-5 p-4 col-6">

         <div class="text-center"><i class="fas fa-info-circle p-2 logo"></i></div>
         <p class="text-center text-uppercase mb-3 h3">Détails du patient</p>

         <hr>

         <?php
         // Nous testons si nous arrivons à obtenir les détails du client sous forme d'un tableau
         if ($detailsPatientArray) {
            include 'include/details-patient.php';
            // si OK, nous indiquons à l'utilisateur que le patient n'est pas présent
         } else { ?>
            <p class="h5 text-danger text-center mb-3"></i>Patient non présent</p>
            <div class="text-center">
               <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-secondary">Liste des patients</a>
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