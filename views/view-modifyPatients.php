<?php
require_once '../controllers/controller-modifyPatients.php';
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

         <div class="text-center text-success"><i class="fas fa-user-edit p-2 logo"></i></div>
         <p class="text-center text-success text-uppercase mb-3 h3">Modification des données</p>

         <hr>

         <p class="h4 text-center text-info"><?= $messages['addPatient'] ?? '' ?></p>

         <?php
         // Nous allons afficher le formulaire : 
         //    si modifyPatient n'est pas vide = nous venons bien de la page detailPatient
         //    si le tableau d'erreurs n'est pas vide = le formulaire contient des erreurs
         if (!empty($_POST['modifyPatient']) || !empty($errors)) { ?>
            <p class="h5 text-center text-danger"><?= $messages['updatePatient'] ?? '' ?></p>
         <?php
            include 'include/form-modifyPatients.php';
            // si la requête d'update passe, nous l'indiquons à l'utilisateur via un message
         } else if ($updatePatientInBase) { ?>
            <p class="h5 text-center text-info">Les modifications ont bien été prises en compte</p>
            <div class="text-center mt-4">
               <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-secondary">Liste des patients</a>
            </div>
         <?php
            // si aucune condition n'est remplie, cela nous indique que l'utilisateur a directement saisi l'URL, nous lui indiquons donc via un message
         } else { ?>
            <p class="h5 text-center text-info">Veuillez selectionner un patient dans la liste</p>
            <div class="text-center mt-4">
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