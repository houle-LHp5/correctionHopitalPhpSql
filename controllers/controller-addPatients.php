<?php

require_once '../models/dataBase.php';
require_once '../models/patients.php';

// Regex Perso
$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$addPatientInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

if (isset($_POST['addPatientBtn'])) {

    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // PENSER A FAIRE DES TESTS SUR LES INPUTS RECUPERES
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    // check input lastname
    if (isset($_POST['lastname'])) {

        if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez respecter le format ex. DOE';
        }

        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez renseigner ce champ';
        }
    }

    // check input mail
    if (isset($_POST['mail'])) {

        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Veuillez respecter le format ex. mail@mail.fr';
        }

        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Veuillez renseigner ce champ';
        }
    }

    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $patientsObj = new Patients;

        // Création d'un tableau contenant toutes les infos du formulaire
        $patientDetails = [
            'lastname' => htmlspecialchars($_POST['lastname']),
            'firstname' => htmlspecialchars($_POST['firstname']),
            'birthdate' => htmlspecialchars($_POST['birthdate']),
            'mail' => htmlspecialchars($_POST['mail']),
            'phone' => htmlspecialchars($_POST['phone']),
        ];

        if ($patientsObj->addPatient($patientDetails)) {
            $addPatientInBase = true;
            $messages['addPatient'] = 'Patient enregistré';
        } else {
            $messages['addPatient'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}
