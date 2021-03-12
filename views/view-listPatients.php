<?php
require_once '../controllers/controller-listPatients.php';
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

         <div class="text-center text-secondary"><i class="fas fa-users p-2 logo"></i></div>
         <p class="text-center text-secondary text-uppercase mb-3 h3">Liste des patients</p>

         <form action="view-detailsPatient.php" method="GET">
            <table class="table table-sm table table-hover">
               <thead>
                  <tr class="table-secondary">
                     <th class="align-middle">N°</th>
                     <th class="align-middle">Nom</th>
                     <th class="align-middle">Prénom</th>
                     <th class="align-middle"></th>
                  </tr>
               </thead>
               <tbody>

                  <?php foreach ($allPatientsArray as $patient) { ?>
                     <tr>
                        <td class="align-middle"><?= $patient['id'] ?></td>
                        <td class="align-middle"><?= $patient['lastname'] ?></td>
                        <td class="align-middle"><?= $patient['firstname'] ?></td>
                        <td class="align-middle text-center">
                           <button type="submit" class="btn btn-outline-dark btn-sm" name="idPatient" value="<?= $patient['id'] ?>">+ infos</button>
                           <button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                        </td>
                     </tr>
                  <?php } ?>

               </tbody>
            </table>
         </form>

         <!-- Mise en place d'une ternaire pour permettre d'afficher un message si jamais le tableau est vide -->
         <?= count($allPatientsArray) == 0 ? '<p class="h6 text-center">Vous n\'avez pas de patients d\'enregistrés<p>' : '' ?>

         <div class="text-center mt-4">
            <a type="button" href="view-addPatients.php" class="btn btn-sm btn-outline-secondary">Ajouter un patient</a>
         </div>

      </div>

   </div>

   <div class="row justify-content-center">
      <!-- button retour accueil -->
      <a href="../index.php" class="btn btn-outline-secondary mt-2 col-2">Accueil</a>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>