<?php
session_start();

// J'appelle mes 2 modèles
require_once '../models/dataBase.php';
require_once '../models/appointments.php';

$appointmentsObj = new Appointments;

if (isset($_GET['idAppointment'])) {
    // Nous recupérons tous les détails du rdv via son id
    $detailsAppointmentArray = $appointmentsObj->getAppointmentDetails($_GET['idAppointment']);
} else {
    $detailsAppointmentArray = false;
}
