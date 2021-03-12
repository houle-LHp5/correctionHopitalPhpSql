             <!-- Nom du patient -->
             <div class="text-left">
                 <label class="label" for="patientId">Nom du patient</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="patient" name="patient" type="text" class="form-control" value="<?= $detailsAppointmentArray['patient'] ?? '' ?>" disabled>
             </div>

             <!-- Date du RDV -->
             <div class="text-left">
                 <label class="label" for="dateAppointment">Date</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <?php
                    //  mise en place d'un format 01/01/1970 pour l'affichage de la date
                    if (isset($detailsAppointmentArray['date'])) {
                        $date = date_create($detailsAppointmentArray['date']);
                        $dateFr = date_format($date, 'd/y/Y');
                    }
                    ?>
                 <input id="dateAppointment" name="dateAppointment" type="text" class="form-control" value="<?= $dateFr ?? '' ?>" disabled>
             </div>

             <!-- Heure du RDV  -->
             <div class="text-left">
                 <label class="label" for="hourAppointment">Heure</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="hourAppointment" name="hourAppointment" type="textF" class="form-control" value="<?= $detailsAppointmentArray['hour'] ?? '' ?>" disabled>
             </div>

             <form action="view-modifyAppointments.php" method="POST">
                 <button type="submit" class="btn btn-sm btn-dark" name="modifyAppointment" value="<?= $detailsAppointmentArray['id'] ?>">Modifier le rendez-vous</button>
                 <a type="button" href="view-listAppointments.php" class="btn btn-sm btn-outline-dark">Retour</a>
             </form>