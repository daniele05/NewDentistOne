<h3 class="mb-3">Modification du mot de passe - <?= $_SESSION['profil']['login'] ?></h3>
<div class="main-wrapper mb-4">

    <form method="POST" action="<?= URL ?>compte/validation_modificationPassword">
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Ancien mot de passe</p>
            <input type="password" name="oldPassword" id="oldPassword" required />
        </div>
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Nouveau mot de passe</p>
            <input type="password" name="newPassword" id="newPassword" required />
        </div>
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Confirmation nouveau mot de passe</p>
            <input type="password" name="confNewPassword" id="confNewPassword" required />
        </div>
        <br>
        <div class="alert alert-danger d-none " id="erreur">
            Les mots de passe ne correspondent pas.
        </div>
        <button type="submit" class="btn btn-primary" id="btnValidation" disabled>Valider</button>

    </form>

</div>