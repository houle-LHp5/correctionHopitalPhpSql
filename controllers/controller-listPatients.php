<?php

require_once '../models/dataBase.php';
require_once '../models/patients.php';

// Creation d'un tableau contenant nos patients avec comme info : id, nom, prénom
$patientsObj = new Patients;
$allPatientsArray = $patientsObj->getAllPatients();

