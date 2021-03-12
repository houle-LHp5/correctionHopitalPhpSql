<?php

// J'appelle mes 2 modèls
require_once '../models/dataBase.php';
require_once '../models/patients.php';

$patientsObj = new Patients;

if (isset($_GET['idPatient'])) {

    // Nous recuperons les détails du patient à l'aide de son id
    $detailsPatientArray = $patientsObj->getDetailsPatient($_GET['idPatient']);

    // Nous recuperons tous les rdv du patients à l'aide de son id
    $appointmentsList = $patientsObj->getPatientAppointments($_GET['idPatient']);
} else {

    $detailsPatientArray = false;
}
