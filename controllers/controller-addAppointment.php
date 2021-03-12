<?php

require_once '../models/dataBase.php';
require_once '../models/patients.php';
require_once '../models/appointments.php';

// Heure d'ouverture de l'hopital
$openHour = 8;
$closeHour = 20;
// fermeture exceptionnelle
$specialHour = 12;


// mise en place d'une variable permettant de gérer l'affichage du form
$addAppointmentInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

// Nous allons recupérer tous les patients via notre méthode pour pouvoir générer les options de notre select
$patientsObj = new Patients;
$selectPatientsArray = $patientsObj->getAllPatientsForSelect();


// Nous détectons le submit du bouton addAppointmentBtn
if (isset($_POST['addAppointmentBtn'])) {

    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // PENSER A FAIRE DES TESTS SUR LES INPUTS RECUPERES
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    if (empty($errors)) {

        $appointmentDetails = [
            'dateHour' => htmlspecialchars($_POST['dateAppointment'] . ' - ' . $_POST['hourAppointment']),
            'idPatients' => htmlspecialchars($_POST['patientId'])
        ];

        $appointmentsObj = new Appointments;

        if ($appointmentsObj->addAppointment($appointmentDetails)) {
            $addAppointmentInBase = true;
            $messages['addAppointement'] = 'Rendez-vous enregistré';
        } else {
            $messages['addAppointement'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}
