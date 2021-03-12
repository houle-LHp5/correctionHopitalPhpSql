<?php

require_once '../models/dataBase.php';
require_once '../models/appointments.php';

// Creation d'un tableau permettant d'obtenir tous nos rendez-vous
$appointmentsObj = new Appointments;
$allAppointmentsArray = $appointmentsObj->getAllAppointments();
