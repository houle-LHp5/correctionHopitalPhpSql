<?php
require_once 'controllers/controller-index.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital LH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row justify-content-center text-center my-5">
        <div class="container border border-secondary p-4 col-6">
            <p class="h1 text-danger text-center">LH HOSPITAL</p>
            <p class="bg-light h2 border text-center p-2 mt-3">Patients</p>
            <a class="btn btn-outline-primary fw-bold shadow w-75 m-2" href="views/view-addPatients.php"><i class="fas fa-user-plus p-2"></i>AJOUTER UN PATIENT</a>
            <a class="btn btn-outline-info fw-bold shadow w-75 m-2" href="views/view-listPatients.php"><i class="far fa-address-book p-2"></i>LISTE DES PATIENTS</a>
            <p class="bg-light h2 border text-center p-2 mt-3">Agenda des rendez-vous</p>
            <a class="btn btn-outline-dark fw-bold shadow w-75 m-2" href="views/view-addAppointments.php"><i class="far fa-calendar-check p-2"></i>AJOUTER UN RDV</a>
            <a class="btn btn-outline-secondary fw-bold shadow w-75 m-2" href="views/view-listAppointments.php"><i class="fas fa-book-medical p-2"></i>LISTE DES RDV</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>