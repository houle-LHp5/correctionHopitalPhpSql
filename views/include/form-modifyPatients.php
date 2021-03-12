         <!-- Utilisation du novalidate pour tester les tests en back -->
         <form novalidate action="" method="POST">
             <!-- Nom -->
             <div class="text-left">
                 <label class="label" for="lastname">Nom</label>
                 <span class="error"><?= $errors['lastname'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" value="<?= $detailsPatientArray['lastname'] ?? (isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '') ?>" required>
             </div>

             <!-- Prénom -->
             <div class="text-left">
                 <label class="label" for="firstname">Prénom</label>
                 <span class="error"></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="firstname" name="firstname" type="text" class="form-control" placeholder="ex. John" value="<?= $detailsPatientArray['firstname'] ?? (isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '') ?>" required>
             </div>

             <!-- Date de naissance  -->
             <div class="text-left">
                 <label class="label" for="birthdate">Date de naissance</label>
                 <span class="error"></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="birthdate" name="birthdate" type="date" class="form-control" value="<?= $detailsPatientArray['birthdate'] ?? (isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : '') ?>" required>
             </div>

             <!-- Numéro de téléphone -->
             <div class="text-left">
                 <label class="label" for="phone">Numéro de téléphone</label>
                 <span class="error"></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="phone" name="phone" type="text" class="form-control" placeholder="ex. 0612XXXXXX" value="<?= $detailsPatientArray['phone'] ?? (isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '') ?>" required>
             </div>

             <!-- Adresse mail -->
             <div class="text-left">
                 <label class="label" for="mail">Adresse mail</label>
                 <span class="error"><?= $errors['mail'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="mail" name="mail" type="mail" class="form-control" placeholder="ex. mail@mail.fr" value="<?= $detailsPatientArray['mail'] ?? (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') ?>" required>
             </div>

             <button type="submit" class="btn btn-sm btn-success" name="updatePatientBtn">Enregistrer</button>
             <a type="button" href="view-detailsPatient.php?idPatient=<?= $_SESSION['idPatientToUpdate'] = $detailsPatientArray['id'] ?? '' ?>" class="btn btn-sm btn-outline-danger">Annuler</a>

         </form>