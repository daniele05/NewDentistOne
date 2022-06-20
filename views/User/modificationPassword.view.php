<h3 class="mb-3">Modification du mot de passe - <?= $_SESSION['profil']['login'] ?></h3>
<div class="main-wrapper mb-4">

    <form method="POST" action="<?= URL ?>compte/validation_modificationPassword">
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Ancien mot de passe</p>
            <input type="password" name="oldpassword" id="oldpassword" required />
        </div>
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Nouveau mot de passe</p>
            <input type="password" name="newpassword" id="newpassword" required />
        </div>
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Confirmation nouveau mot de passe</p>
            <input type="password" name="confnewpassword" id="confnewpassword" required />
        </div>
        <br>
        <div class="alert alert-danger d-none " id="erreur">
            Les mots de passe ne correspondent pas.
        </div>
        <button type="submit" class="btn btn-primary" id="btnValidation" disabled>valider</button>

    </form>
    <div class="float circle c-1"></div>
    <div class="float circle c-2"></div>
    <div class="float circle c-3"></div>
    <div class="float line l-1"></div>
    <div class="float line l-2"></div>
    <div class="float line l-3"></div>
</div>
<div class="main-wrapper2">
    <div class="border-line"></div>
</div>