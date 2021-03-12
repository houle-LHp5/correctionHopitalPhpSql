<?php
session_start();

require_once '../models/dataBase.php';
require_once '../models/patients.php';

// Regex Perso
$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$updatePatientInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

// Nous testons si nous avons bien une valeur non NULL dans le $_POST ModifyPatient qui signifie que nous venons bien de la page detailsPatient
if (!empty($_POST['modifyPatient'])) {
    // Création d'un nouvel objet
    $patientsObj = new Patients;
    // Nous allons récupérer les informations de notre patient nous permettant de pré-remplir le formulaire
    $detailsPatientArray = $patientsObj->getDetailsPatient($_POST['modifyPatient']);
    // Pour plus de sécurité, je stocl l'id du patient à modifier dans une variable de session
    $_SESSION['idPatientToUpdate'] = $detailsPatientArray['id'];
}

if (isset($_POST['updatePatientBtn'])) {

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
            // je recupère mon id que j'ai stocké dans ma variable de session
            'id' => $_SESSION['idPatientToUpdate']
        ];

        if ($patientsObj->updatePatient($patientDetails)) {
            $updatePatientInBase = true;
        } else {
            $messages['updatePatient'] = 'Erreur de connexion lors de la modification';
        }
    }
}
