             <!-- Nom -->
             <div class="text-left">
                 <label class="label" for="lastname">Nom</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" value="<?= $detailsPatientArray['lastname'] ?>" disabled>
             </div>

             <!-- Prénom -->
             <div class="text-left">
                 <label class="label" for="firstname">Prénom</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="firstname" name="firstname" type="text" class="form-control" value="<?= $detailsPatientArray['firstname'] ?>" disabled>
             </div>

             <!-- Date de naissance  -->
             <div class="text-left">
                 <label class="label" for="birthdate">Date de naissance</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="birthdate" name="birthdate" type="date" class="form-control" value="<?= $detailsPatientArray['birthdate'] ?>" disabled>
             </div>

             <!-- Numéro de téléphone -->
             <div class="text-left">
                 <label class="label" for="phone">Numéro de téléphone</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="phone" name="phone" type="text" class="form-control" value="<?= $detailsPatientArray['phone'] ?>" disabled>
             </div>

             <!-- Adresse mail -->
             <div class="text-left">
                 <label class="label" for="mail">Adresse mail</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="mail" name="mail" type="mail" class="form-control" value="<?= $detailsPatientArray['mail'] ?>" disabled>
             </div>
             <form action="view-modifyPatients.php" method="POST">
                 <button type="submit" class="btn btn-sm btn-dark" name="modifyPatient" value="<?= $detailsPatientArray['id'] ?>">Modifier</button>
                 <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-dark">Retour</a>
             </form>

             <form action="../views/view-detailsAppointment.php" method="GET">
                 <div class="list-group mt-3">
                     <?php
                        foreach ($appointmentsList as $appointment) { ?>

                         <button type="submit" class="btn-sm list-group-item list-group-item-action" name="idAppointment" value="<?= $appointment['appointmentId'] ?>"><i class="fas fa-calendar-check pe-2"></i>Le <?= $appointment['date'] ?> à <?= $appointment['hour'] ?></button>

                     <?php
                        } ?>
                 </div>
             </form>
